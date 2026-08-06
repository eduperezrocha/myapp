{
  description = "Local PHP + Apache dev environment for myapp";

  inputs = {
    nixpkgs.url = "github:NixOS/nixpkgs/nixos-unstable";
    flake-utils.url = "github:numtide/flake-utils";
  };

  outputs = { self, nixpkgs, flake-utils }:
    flake-utils.lib.eachDefaultSystem (system:
      let
        pkgs = import nixpkgs { inherit system; };

        # Generates config files on demand, based on $PWD at call time,
        # so this works no matter how the shell env was entered (direnv,
        # nix develop, etc). Idempotent - safe to call every time.
        setupConfig = pkgs.writeShellScriptBin "setup-config" ''
          set -e
          export PROJECT_ROOT="$(pwd)"
          export RUNTIME_DIR="$PROJECT_ROOT/.nix-run"
          mkdir -p "$RUNTIME_DIR"

          cat > "$RUNTIME_DIR/php-fpm.conf" <<EOF
          [global]
          pid = $RUNTIME_DIR/php-fpm.pid
          error_log = $RUNTIME_DIR/php-fpm.log
          daemonize = no

          [www]
          listen = $RUNTIME_DIR/php-fpm.sock
          pm = dynamic
          pm.max_children = 5
          pm.start_servers = 2
          pm.min_spare_servers = 1
          pm.max_spare_servers = 3
          EOF

          cat > "$RUNTIME_DIR/httpd.conf" <<EOF
          ServerRoot "${pkgs.apacheHttpd}"
          ServerName localhost
          Listen 8080

          PidFile "$RUNTIME_DIR/httpd.pid"
          ErrorLog "$RUNTIME_DIR/error.log"
          LogFormat "%h %l %u %t \"%r\" %>s %b" common
          CustomLog "$RUNTIME_DIR/access.log" common

          LoadModule mpm_event_module ${pkgs.apacheHttpd}/modules/mod_mpm_event.so
          LoadModule unixd_module ${pkgs.apacheHttpd}/modules/mod_unixd.so
          LoadModule authz_core_module ${pkgs.apacheHttpd}/modules/mod_authz_core.so
          LoadModule dir_module ${pkgs.apacheHttpd}/modules/mod_dir.so
          LoadModule mime_module ${pkgs.apacheHttpd}/modules/mod_mime.so
          LoadModule log_config_module ${pkgs.apacheHttpd}/modules/mod_log_config.so
          LoadModule proxy_module ${pkgs.apacheHttpd}/modules/mod_proxy.so
          LoadModule proxy_fcgi_module ${pkgs.apacheHttpd}/modules/mod_proxy_fcgi.so

          TypesConfig "${pkgs.apacheHttpd}/conf/mime.types"

          DocumentRoot "$PROJECT_ROOT"
          <Directory "$PROJECT_ROOT">
            Options Indexes FollowSymLinks
            AllowOverride All
            Require all granted
            DirectoryIndex index.html index.php
          </Directory>

          <FilesMatch \.php\$>
            SetHandler "proxy:unix:$RUNTIME_DIR/php-fpm.sock|fcgi://localhost/"
          </FilesMatch>
          EOF
        '';

        serve = pkgs.writeShellScriptBin "serve" ''
          set -e
          ${setupConfig}/bin/setup-config
          RUNTIME_DIR="$(pwd)/.nix-run"

          echo "Starting php-fpm..."
          ${pkgs.php}/bin/php-fpm -y "$RUNTIME_DIR/php-fpm.conf" &
          echo $! > "$RUNTIME_DIR/php-fpm.shellpid"

          echo "Starting apache on http://localhost:8080 ..."
          ${pkgs.apacheHttpd}/bin/httpd -f "$RUNTIME_DIR/httpd.conf" -X &
          echo $! > "$RUNTIME_DIR/httpd.shellpid"

          echo "PID files written to $RUNTIME_DIR. Run 'stop_serve' to stop."
          wait
        '';

        stopServe = pkgs.writeShellScriptBin "stop_serve" ''
          RUNTIME_DIR="$(pwd)/.nix-run"
          [ -f "$RUNTIME_DIR/php-fpm.shellpid" ] && kill "$(cat "$RUNTIME_DIR/php-fpm.shellpid")" 2>/dev/null
          [ -f "$RUNTIME_DIR/httpd.shellpid" ] && kill "$(cat "$RUNTIME_DIR/httpd.shellpid")" 2>/dev/null
          rm -f "$RUNTIME_DIR"/*.shellpid
          echo "Stopped."
        '';
      in
      {
        devShells.default = pkgs.mkShell {
          buildInputs = [ pkgs.php pkgs.apacheHttpd pkgs.nodejs_26 pkgs.phpactor setupConfig serve stopServe ];

          shellHook = ''
            ${setupConfig}/bin/setup-config
            echo "PHP $(php -v | head -n1)"
            echo "Apache $(httpd -v | head -n1)"
            echo ""
            echo "Run 'serve' to start php-fpm + apache on http://localhost:8080 (foreground; Ctrl-C stops it)"
            echo "Or run 'serve &' to background it, then 'stop_serve' to stop"
          '';
        };
      });
}

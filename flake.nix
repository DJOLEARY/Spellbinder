{
  description = "Spellbinder";

  inputs = {
    nixpkgs-unstable.url = "github:nixos/nixpkgs?ref=nixos-unstable";
  };

  outputs =
    { self, nixpkgs-unstable }:
    let
      pkgs = import nixpkgs-unstable {
        config.allowUnfree = true;
      };
    in
    {
      devShells.x86_64-linux.default =
        let
          phpVersion = "php83";
          phpPackage = pkgs.lib.attrByPath [ phpVersion ] null pkgs;
          phpEnv = phpPackage.buildEnv {
            extensions = (
              { enabled, all }:
              enabled
              ++ (with all; [
                xdebug
                iconv
              ])
            );
            extraConfig = ''
              xdebug.mode=debug
              xdebug.start_with_request=trigger
            '';
          };
        in
        pkgs.mkShell {
          buildInputs = with pkgs; [
            phpEnv
            laravel
            blade-formatter
            intelephense
            nodejs_18
            phpunit
            phpEnv.packages.composer
            phpEnv.packages.php-cs-fixer
            phpEnv.packages.phpstan
          ];
        };
    };
}

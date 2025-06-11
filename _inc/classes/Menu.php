<?php

class Menu
{
    private $menuItems;

    public function __construct($menuItems = [])
    {
        if (empty($menuItems)) {
            $menuItems = [
                ['label' => 'Home', 'link' => 'index.php'],
                ['label' => 'Projects', 'link' => 'projects.php'],
                ['label' => 'Pages', 
                    'submenu' =>    [
                                        ['label' => 'About Us', 'link' => 'about.php'],
                                        ['label' => 'FAQs', 'link' => 'faqs.php']
                                    ]
                ],
                ['label' => 'Contact', 'link' => 'contact.php']
            ];
        }
        
        $this->menuItems = $menuItems;
    }

    public function render()
    {
        echo '<ul class="nav">';
        foreach ($this->menuItems as $item) {
            if (isset($item['submenu'])) {
                echo '<li class="has-sub">';
                echo '<a href="javascript:void(0)">' . htmlspecialchars($item['label']) . '</a>';
                echo '<ul class="sub-menu">';
                foreach ($item['submenu'] as $subItem) {
                    echo '<li><a href="' . htmlspecialchars($subItem['link']) . '">' . htmlspecialchars($subItem['label']) . '</a></li>';
                }
                echo '</ul>';
                echo '</li>';
            } else {
                echo '<li class="scroll-to-section"><a href="' . htmlspecialchars($item['link']) . '">' . htmlspecialchars($item['label']) . '</a></li>';
            }
        }
        echo '</ul>';
    }
}
?>

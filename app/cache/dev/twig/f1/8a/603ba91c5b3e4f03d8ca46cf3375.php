<?php

/* :public:navbar.html.twig */
class __TwigTemplate_f18a603ba91c5b3e4f03d8ca46cf3375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar-inner\">
    <div class=\"container\">
        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </a>
        <a class=\"brand\" href=\"/home\"></a>
        <div class=\"group-menu nav-collapse\"> 
            <ul class=\"nav pull-right\">
                <li class=\"divider-vertical\"></li>
                ";
        // line 12
        if (($this->getContext($context, "auth_level") > 0)) {
            // line 13
            echo "                    <li class=\"dropdown\" id=\"userbox\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#userbox\">Logged as ";
            // line 14
            echo twig_escape_filter($this->env, $this->getContext($context, "username"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/profile\"><i class=\"icon-profile\"></i> Profile</a></li>
                            <li><a href=\"/account\"><i class=\"icon-account\"></i> Account</a></li>
                            <li>
                                <a href=\"/mailbox\">
                                    <i class=\"icon-mailbox\"></i> 
                                    ";
            // line 21
            if (($this->getContext($context, "inbox") > 0)) {
                echo "<strong>";
            }
            // line 22
            echo "                                        Inbox (";
            echo twig_escape_filter($this->env, $this->getContext($context, "inbox"), "html", null, true);
            echo ")
                                    ";
            // line 23
            if (($this->getContext($context, "inbox") > 0)) {
                echo "</strong>";
            }
            // line 24
            echo "                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
            echo "/language/fr\"><i class=\"icon-language\"></i> French (Français)</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
            echo "/logout\"><i class=\"icon-off\"></i> Logout</a></li>
                        </ul> <!-- /dropdown-menu -->
                    </li> <!-- /dropdown -->
                ";
        } else {
            // line 33
            echo "                    <li>
                        <a data-toggle=\"modal\" href=\"#login\">Login</a>
                    </li>
                    <li class=\"divider-vertical\"></li>
                    <li>
                        <a data-toggle=\"modal\" href=\"#registration\">Register</a>
                    </li>
                ";
        }
        // line 41
        echo "            </ul> <!-- /nav -->
            <form id=\"searchbar\" action=\"catalog/search\" class=\"navbar-search pull-right\">
                <input type=\"text\" name=\"search-games\" placeholder=\"Search for games...\" />
            </form> <!-- /searchbar -->
        </div> <!-- /group-menu -->
    </div> <!-- /container -->
</div> <!-- /navbar-inner -->";
    }

    public function getTemplateName()
    {
        return ":public:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 41,  75 => 33,  68 => 29,  63 => 27,  58 => 24,  54 => 23,  45 => 21,  35 => 14,  32 => 13,  30 => 12,  53 => 11,  48 => 10,  41 => 8,  22 => 3,  19 => 2,  17 => 1,  173 => 54,  170 => 53,  167 => 52,  162 => 38,  158 => 34,  155 => 33,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  118 => 12,  115 => 11,  111 => 10,  108 => 9,  105 => 8,  97 => 4,  92 => 55,  90 => 52,  86 => 50,  84 => 49,  80 => 47,  78 => 46,  69 => 39,  67 => 38,  62 => 14,  60 => 23,  57 => 22,  55 => 21,  51 => 19,  49 => 22,  43 => 9,  40 => 11,  38 => 7,  31 => 4,  26 => 4,  23 => 1,);
    }
}

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
        return array (  101 => 26,  110 => 30,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 260,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 207,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  725 => 188,  722 => 187,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  658 => 163,  656 => 162,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 149,  624 => 148,  621 => 147,  613 => 143,  611 => 142,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 126,  567 => 121,  559 => 120,  554 => 119,  548 => 117,  545 => 116,  543 => 115,  540 => 114,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 99,  511 => 98,  502 => 92,  498 => 91,  494 => 90,  490 => 89,  485 => 88,  479 => 86,  476 => 85,  474 => 84,  471 => 83,  455 => 79,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 61,  405 => 60,  400 => 59,  397 => 58,  394 => 57,  388 => 55,  386 => 54,  378 => 53,  374 => 51,  366 => 49,  361 => 48,  357 => 47,  352 => 46,  349 => 45,  347 => 44,  344 => 43,  335 => 39,  319 => 35,  300 => 32,  295 => 31,  292 => 30,  287 => 29,  285 => 28,  272 => 23,  270 => 22,  267 => 21,  259 => 17,  256 => 16,  253 => 15,  245 => 12,  237 => 7,  233 => 6,  226 => 4,  223 => 3,  219 => 288,  216 => 287,  206 => 271,  198 => 259,  191 => 242,  160 => 205,  147 => 187,  144 => 186,  332 => 137,  329 => 136,  323 => 37,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 33,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 27,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 269,  201 => 260,  194 => 76,  183 => 236,  180 => 235,  175 => 225,  114 => 146,  157 => 204,  130 => 48,  56 => 14,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 14,  248 => 13,  235 => 107,  228 => 5,  221 => 99,  214 => 281,  207 => 83,  164 => 59,  151 => 53,  83 => 26,  154 => 54,  150 => 43,  119 => 153,  66 => 15,  68 => 29,  21 => 3,  112 => 141,  106 => 35,  65 => 18,  45 => 21,  136 => 62,  100 => 27,  85 => 41,  76 => 24,  61 => 16,  173 => 220,  170 => 219,  167 => 217,  155 => 196,  149 => 193,  143 => 49,  140 => 52,  118 => 36,  105 => 37,  36 => 7,  209 => 272,  205 => 82,  196 => 248,  192 => 78,  189 => 73,  178 => 226,  176 => 70,  165 => 212,  161 => 58,  152 => 195,  148 => 57,  145 => 49,  141 => 63,  134 => 174,  132 => 168,  127 => 161,  123 => 38,  109 => 140,  93 => 28,  90 => 31,  54 => 23,  133 => 46,  124 => 160,  111 => 33,  80 => 17,  60 => 10,  52 => 9,  97 => 114,  95 => 30,  88 => 24,  78 => 46,  71 => 19,  72 => 22,  64 => 11,  53 => 13,  42 => 8,  34 => 7,  224 => 91,  215 => 90,  211 => 280,  204 => 84,  200 => 87,  195 => 80,  193 => 247,  190 => 78,  188 => 241,  185 => 239,  179 => 72,  177 => 67,  171 => 67,  162 => 211,  158 => 57,  156 => 56,  153 => 59,  146 => 30,  142 => 182,  137 => 175,  126 => 39,  120 => 37,  117 => 147,  103 => 28,  74 => 70,  47 => 12,  32 => 13,  40 => 11,  26 => 5,  22 => 4,  25 => 7,  23 => 5,  92 => 98,  86 => 18,  79 => 76,  29 => 8,  24 => 3,  19 => 1,  17 => 1,  69 => 42,  63 => 27,  58 => 24,  49 => 22,  43 => 12,  37 => 10,  20 => 2,  139 => 181,  131 => 25,  128 => 24,  125 => 41,  121 => 13,  115 => 11,  107 => 134,  99 => 33,  96 => 34,  91 => 25,  82 => 77,  77 => 20,  75 => 33,  57 => 12,  50 => 13,  46 => 11,  44 => 10,  39 => 7,  33 => 5,  30 => 12,  27 => 6,  135 => 41,  129 => 167,  122 => 154,  116 => 31,  113 => 40,  108 => 38,  104 => 133,  102 => 126,  94 => 113,  89 => 97,  87 => 83,  84 => 82,  81 => 22,  73 => 23,  70 => 21,  67 => 27,  62 => 17,  59 => 20,  55 => 14,  51 => 18,  48 => 12,  41 => 9,  38 => 8,  35 => 14,  31 => 4,  28 => 3,);
    }
}

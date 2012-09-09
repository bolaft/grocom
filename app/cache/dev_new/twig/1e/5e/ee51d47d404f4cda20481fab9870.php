<?php

/* ::public.html.twig */
class __TwigTemplate_1e5eee51d47d404f4cda20481fab9870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'less' => array($this, 'block_less'),
            'modals' => array($this, 'block_modals'),
            'page' => array($this, 'block_page'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "language"), "html", null, true);
        echo ">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('less', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        <div id=\"wrapper\">
            <div class=\"navbar navbar-fixed-top\">
                ";
        // line 18
        $this->env->loadTemplate(":public:navbar.html.twig")->display($context);
        // line 19
        echo "            </div> <!-- /navbar -->
            <div class=\"subnavbar\">
                ";
        // line 21
        $this->env->loadTemplate(":public:subnavbar.html.twig")->display($context);
        // line 22
        echo "            </div> <!-- /subnavbar -->
            ";
        // line 23
        $this->displayBlock('modals', $context, $blocks);
        // line 35
        echo "            <div id=\"content\">
                <div class=\"inner\">
                    <div class=\"container\">
                        ";
        // line 38
        $this->displayBlock('page', $context, $blocks);
        // line 39
        echo "                    </div> <!-- /container -->
                </div> <!-- /inner -->
            </div> <!-- /content -->
            <div id=\"clear-footer\"></div>
        </div><!-- /wrap -->
        <footer>
            <div id=\"extra\">
                ";
        // line 46
        $this->env->loadTemplate(":public:extra.html.twig")->display($context);
        // line 47
        echo "            </div> <!-- /extra -->
            <div id=\"footer\">
                ";
        // line 49
        $this->env->loadTemplate(":public:footer.html.twig")->display($context);
        // line 50
        echo "            </div> <!-- /footer -->
        </footer>
        ";
        // line 52
        $this->displayBlock('js', $context, $blocks);
        // line 55
        echo "    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getContext($context, "title")), "html", null, true);
        echo " ";
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        // line 9
        echo "            ";
        echo $this->env->getExtension('actions')->renderAction("FrameStyle:Style:css", array("page" => $this->getContext($context, "page")), array());
        // line 10
        echo "        ";
    }

    // line 11
    public function block_less($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        echo $this->env->getExtension('actions')->renderAction("FrameStyle:Style:less", array("page" => $this->getContext($context, "page")), array());
        // line 13
        echo "        ";
    }

    // line 23
    public function block_modals($context, array $blocks = array())
    {
        // line 24
        echo "                ";
        if (($this->getContext($context, "auth_level") < 1)) {
            // line 25
            echo "                    ";
            $this->env->loadTemplate("FrameUser:modal:login.html.twig")->display($context);
            // line 26
            echo "                    ";
            $this->env->loadTemplate("FrameUser:modal:registration.html.twig")->display($context);
            // line 27
            echo "                ";
        }
        // line 28
        echo "                ";
        if (($this->getContext($context, "dev") == true)) {
            // line 29
            echo "                    ";
            $this->env->loadTemplate("FrameDebug:modal:debug.html.twig")->display($context);
            // line 30
            echo "                ";
        }
        // line 31
        echo "                ";
        if (array_key_exists("subscription", $context)) {
            // line 32
            echo "                    ";
            $this->env->loadTemplate("FrameNewsletter:modal:subscription.html.twig")->display($context);
            // line 33
            echo "                ";
        }
        // line 34
        echo "            ";
    }

    // line 38
    public function block_page($context, array $blocks = array())
    {
    }

    // line 52
    public function block_js($context, array $blocks = array())
    {
        // line 53
        echo "            ";
        echo $this->env->getExtension('actions')->renderAction("FrameStyle:Style:js", array("page" => $this->getContext($context, "page")), array());
        // line 54
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 54,  170 => 53,  167 => 52,  155 => 33,  149 => 31,  143 => 29,  140 => 28,  118 => 12,  105 => 8,  36 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 32,  148 => 57,  145 => 56,  141 => 55,  134 => 26,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 52,  54 => 14,  133 => 44,  124 => 41,  111 => 10,  80 => 47,  60 => 23,  52 => 12,  97 => 4,  95 => 21,  88 => 29,  78 => 46,  71 => 14,  72 => 16,  64 => 15,  53 => 11,  42 => 7,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 38,  158 => 34,  156 => 60,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 4,  40 => 11,  26 => 2,  22 => 3,  25 => 4,  23 => 1,  92 => 55,  86 => 50,  79 => 40,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 39,  63 => 18,  58 => 9,  49 => 18,  43 => 14,  37 => 8,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 22,  50 => 13,  46 => 10,  44 => 11,  39 => 8,  33 => 5,  30 => 9,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 9,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 49,  81 => 26,  73 => 21,  70 => 26,  67 => 38,  62 => 35,  59 => 23,  55 => 21,  51 => 19,  48 => 10,  41 => 8,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}

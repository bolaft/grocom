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
        return array (  173 => 54,  170 => 53,  167 => 52,  162 => 38,  158 => 34,  155 => 33,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  118 => 12,  115 => 11,  111 => 10,  108 => 9,  105 => 8,  97 => 4,  92 => 55,  90 => 52,  86 => 50,  84 => 49,  80 => 47,  78 => 46,  69 => 39,  67 => 38,  62 => 35,  60 => 23,  57 => 22,  55 => 21,  51 => 19,  49 => 18,  43 => 14,  40 => 11,  38 => 8,  31 => 4,  26 => 2,  23 => 1,);
    }
}

<?php

/* ::public.html.twig */
class __TwigTemplate_7a474704a1e27295f7912118db4815d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'less' => array($this, 'block_less'),
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
            <div id=\"content\">
                <div class=\"inner\">
                    <div class=\"container\">
                        ";
        // line 26
        $this->displayBlock('page', $context, $blocks);
        // line 27
        echo "                    </div> <!-- /container -->
                </div> <!-- /inner -->
            </div> <!-- /content -->
            <div id=\"clear-footer\"></div>
        </div><!-- /wrap -->
        <footer>
            <div id=\"extra\">
                ";
        // line 34
        $this->env->loadTemplate(":public:extra.html.twig")->display($context);
        // line 35
        echo "            </div> <!-- /extra -->
            <div id=\"footer\">
                ";
        // line 37
        $this->env->loadTemplate(":public:footer.html.twig")->display($context);
        // line 38
        echo "            </div> <!-- /footer -->
        </footer>
        ";
        // line 40
        $this->displayBlock('js', $context, $blocks);
        // line 43
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
        echo $this->env->getExtension('actions')->renderAction("FrameStyle:Style:css", array(), array());
        // line 10
        echo "        ";
    }

    // line 11
    public function block_less($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        echo $this->env->getExtension('actions')->renderAction("FrameStyle:Style:less", array(), array());
        // line 13
        echo "        ";
    }

    // line 26
    public function block_page($context, array $blocks = array())
    {
    }

    // line 40
    public function block_js($context, array $blocks = array())
    {
        // line 41
        echo "            ";
        echo $this->env->getExtension('actions')->renderAction("FrameStyle:Style:js", array(), array());
        // line 42
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
        return array (  131 => 42,  128 => 41,  125 => 40,  120 => 26,  116 => 13,  113 => 12,  110 => 11,  106 => 10,  103 => 9,  100 => 8,  92 => 4,  87 => 43,  85 => 40,  81 => 38,  79 => 37,  75 => 35,  73 => 34,  64 => 27,  62 => 26,  56 => 22,  54 => 21,  50 => 19,  48 => 18,  42 => 14,  39 => 11,  37 => 8,  30 => 4,  25 => 2,  22 => 1,);
    }
}

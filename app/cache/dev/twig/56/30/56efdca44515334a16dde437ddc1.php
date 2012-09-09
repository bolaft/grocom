<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_563056efdca44515334a16dde437ddc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear_fix\">
                <div class=\"header_logo\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/logo_symfony.gif"), "html", null, true);
        echo "\" alt=\"Symfony\" />
                </div>

                <div class=\"search\">
                  <form method=\"get\" action=\"http://symfony.com/search\">
                    <div class=\"form_row\">

                      <label for=\"search_id\">
                          <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/grey_magnifier.png"), "html", null, true);
        echo "\" alt=\"Search on Symfony website\" />
                      </label>

                      <input name=\"q\" id=\"search_id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                      <button type=\"submit\">
                        <span class=\"border_l\">
                          <span class=\"border_r\">
                            <span class=\"btn_bg\">OK</span>
                          </span>
                        </span>
                      </button>
                    </div>
                   </form>
                </div>
            </div>

            ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 40,  46 => 14,  33 => 7,  24 => 4,  44 => 8,  27 => 3,  77 => 39,  71 => 15,  64 => 11,  52 => 9,  37 => 8,  34 => 7,  29 => 6,  85 => 41,  75 => 33,  68 => 29,  63 => 27,  58 => 24,  54 => 23,  45 => 21,  35 => 14,  32 => 13,  30 => 4,  53 => 11,  48 => 10,  41 => 7,  22 => 4,  19 => 1,  17 => 1,  173 => 54,  170 => 53,  167 => 52,  162 => 38,  158 => 34,  155 => 33,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  118 => 12,  115 => 11,  111 => 10,  108 => 9,  105 => 8,  97 => 4,  92 => 39,  90 => 52,  86 => 6,  84 => 49,  80 => 17,  78 => 46,  69 => 39,  67 => 38,  62 => 14,  60 => 10,  57 => 22,  55 => 21,  51 => 19,  49 => 22,  43 => 9,  40 => 11,  38 => 7,  31 => 4,  26 => 5,  23 => 1,);
    }
}

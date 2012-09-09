<?php

/* :public:footer.html.twig */
class __TwigTemplate_868fe73aa5a3bdef0d25b745855fd442 extends Twig_Template
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
        echo "<div class=\"inner\">
    <div class=\"container\">
        <div class=\"row\">
            <span class=\"span12\">
                <a href=\"/terms\">&copy; 2012 ";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "site_name")), "html", null, true);
        echo "</a>
                <a class=\"pull-right\" href=\"mailto:contact@";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "domain"), "html", null, true);
        echo "\"><i class=\"icon-envelope\"></i> Contact</a>
            </span>
        </div> <!-- /row -->
    </div> <!-- /container -->
</div> <!-- /inner -->";
    }

    public function getTemplateName()
    {
        return ":public:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  23 => 5,  133 => 46,  116 => 31,  110 => 30,  101 => 26,  91 => 25,  88 => 24,  81 => 22,  40 => 11,  25 => 7,  86 => 18,  80 => 17,  77 => 20,  71 => 19,  64 => 11,  60 => 10,  52 => 9,  37 => 10,  34 => 7,  29 => 8,  85 => 23,  75 => 33,  68 => 18,  63 => 27,  58 => 24,  54 => 23,  49 => 22,  45 => 21,  35 => 14,  32 => 9,  30 => 12,  62 => 17,  53 => 13,  48 => 10,  43 => 12,  41 => 8,  38 => 7,  26 => 5,  22 => 4,  19 => 2,  17 => 1,);
    }
}

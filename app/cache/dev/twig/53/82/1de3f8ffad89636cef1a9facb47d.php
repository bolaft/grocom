<?php

/* :public:subnavbar.html.twig */
class __TwigTemplate_53821de3f8ffad89636cef1a9facb47d extends Twig_Template
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
        echo "<div class=\"subnavbar-inner\">
    <div class=\"container\">
        <ul class=\"mainnav\">
            ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "site_map"));
        foreach ($context['_seq'] as $context["section"] => $context["pages"]) {
            // line 5
            echo "                ";
            if ((twig_slice($this->env, $this->getContext($context, "section"), 0, 1) != "_")) {
                // line 6
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
                foreach ($context['_seq'] as $context["p"] => $context["permission"]) {
                    // line 7
                    echo "                        ";
                    if (((($this->getContext($context, "permission") == 0) || ($this->getContext($context, "auth_level") >= $this->getContext($context, "permission"))) && (($this->getContext($context, "section") == $this->getContext($context, "p")) || $this->getAttribute($this->getContext($context, "pages", true), "page", array(), "any", true, true)))) {
                        // line 8
                        echo "                            <li class=\"";
                        if ($this->getAttribute($this->getContext($context, "pages", true), "page", array(), "any", true, true)) {
                            echo "category";
                        }
                        echo " ";
                        if ((twig_lower_filter($this->env, $this->getContext($context, "p")) == $this->getContext($context, "page"))) {
                            echo "active";
                        }
                        echo " ";
                        if ((($this->getContext($context, "section") == $this->getContext($context, "page")) && ($this->getContext($context, "section") != $this->getContext($context, "p")))) {
                            echo "noshow";
                        }
                        echo "\">
                                <a ";
                        // line 9
                        if ((twig_lower_filter($this->env, $this->getContext($context, "p")) != $this->getContext($context, "page"))) {
                            echo "href=\"/";
                            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                    <i class=\"icon-";
                        // line 10
                        echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                        echo "\"></i> 
                                    <span>";
                        // line 11
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "p")), "html", null, true);
                        echo "</span>
                                </a>
                            </li>
                        ";
                    }
                    // line 15
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['p'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 16
                echo "                ";
            }
            // line 17
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['pages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "        </ul> <!-- /mainnav -->
    </div> <!-- /container -->
</div> <!-- /subnavbar-inner -->";
    }

    public function getTemplateName()
    {
        return ":public:subnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  71 => 15,  64 => 11,  52 => 9,  37 => 8,  34 => 7,  29 => 6,  85 => 41,  75 => 33,  68 => 29,  63 => 27,  58 => 24,  54 => 23,  45 => 21,  35 => 14,  32 => 13,  30 => 12,  53 => 11,  48 => 10,  41 => 8,  22 => 4,  19 => 2,  17 => 1,  173 => 54,  170 => 53,  167 => 52,  162 => 38,  158 => 34,  155 => 33,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  118 => 12,  115 => 11,  111 => 10,  108 => 9,  105 => 8,  97 => 4,  92 => 55,  90 => 52,  86 => 18,  84 => 49,  80 => 17,  78 => 46,  69 => 39,  67 => 38,  62 => 14,  60 => 10,  57 => 22,  55 => 21,  51 => 19,  49 => 22,  43 => 9,  40 => 11,  38 => 7,  31 => 4,  26 => 5,  23 => 1,);
    }
}

<?php

/* :public:subnavbar.html.twig */
class __TwigTemplate_71b16f5ab385a64bee923601509b1cbb extends Twig_Template
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
                            echo "href=\"";
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
        return array (  86 => 18,  80 => 17,  77 => 16,  71 => 15,  64 => 11,  60 => 10,  52 => 9,  37 => 8,  34 => 7,  29 => 6,  26 => 5,  22 => 4,  17 => 1,);
    }
}

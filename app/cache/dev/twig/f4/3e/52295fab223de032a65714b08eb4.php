<?php

/* FrameStyle::less.html.twig */
class __TwigTemplate_f43e52295fab223de032a65714b08eb4 extends Twig_Template
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
        if ($this->getContext($context, "less")) {
            // line 2
            echo "<!-- less -->
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "less"));
            foreach ($context['_seq'] as $context["file"] => $context["media"]) {
                // line 4
                echo "        <link rel=\"stylesheet/less\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "file")), "html", null, true);
                echo "\" media=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "media"), "html", null, true);
                echo "\" />
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['file'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 7
        echo "
";
        // line 8
        if ($this->getContext($context, "ieLess")) {
            // line 9
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ieLess"));
            foreach ($context['_seq'] as $context["version"] => $context["file"]) {
                // line 10
                echo "        <!--[if ";
                echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
                echo "]>
            <link rel=\"stylesheet/less\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "file")), "html", null, true);
                echo "\" />
        <![endif]-->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "<!-- /less -->
";
        }
    }

    public function getTemplateName()
    {
        return "FrameStyle::less.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  48 => 10,  41 => 8,  22 => 3,  19 => 2,  17 => 1,  173 => 54,  170 => 53,  167 => 52,  162 => 38,  158 => 34,  155 => 33,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  118 => 12,  115 => 11,  111 => 10,  108 => 9,  105 => 8,  97 => 4,  92 => 55,  90 => 52,  86 => 50,  84 => 49,  80 => 47,  78 => 46,  69 => 39,  67 => 38,  62 => 14,  60 => 23,  57 => 22,  55 => 21,  51 => 19,  49 => 18,  43 => 9,  40 => 11,  38 => 7,  31 => 4,  26 => 4,  23 => 1,);
    }
}

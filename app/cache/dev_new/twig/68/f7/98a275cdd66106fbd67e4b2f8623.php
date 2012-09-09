<?php

/* FrameStyle::css.html.twig */
class __TwigTemplate_68f798a275cdd66106fbd67e4b2f8623 extends Twig_Template
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
        if ($this->getContext($context, "css")) {
            // line 2
            echo "<!-- CSS -->
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "css"));
            foreach ($context['_seq'] as $context["file"] => $context["media"]) {
                // line 4
                echo "        <link rel=\"stylesheet\" href=\"";
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
        if ($this->getContext($context, "ieCss")) {
            // line 9
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ieCss"));
            foreach ($context['_seq'] as $context["version"] => $context["file"]) {
                // line 10
                echo "        <!--[if ";
                echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
                echo "]>
            <link rel=\"stylesheet\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getContext($context, "file"), "html", null, true);
                echo "\" />
        <![endif]-->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "<!-- /CSS -->
";
        }
    }

    public function getTemplateName()
    {
        return "FrameStyle::css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 14,  52 => 12,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  72 => 16,  64 => 15,  53 => 11,  42 => 7,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 11,  40 => 6,  26 => 4,  22 => 3,  25 => 4,  23 => 3,  92 => 20,  86 => 28,  79 => 40,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 20,  63 => 18,  58 => 9,  49 => 11,  43 => 9,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 15,  50 => 13,  46 => 10,  44 => 11,  39 => 8,  33 => 5,  30 => 9,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 14,  59 => 23,  55 => 14,  51 => 11,  48 => 10,  41 => 8,  38 => 7,  35 => 7,  31 => 4,  28 => 3,);
    }
}

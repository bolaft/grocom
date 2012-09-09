<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_d8164844f0a07598a7bed06e3c1884f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ($this->getContext($context, "tokens")) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tokens"));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 18
                echo "                    <tr>
                        <td><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "elements"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 28
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  76 => 39,  61 => 28,  21 => 3,  167 => 52,  164 => 51,  149 => 31,  143 => 29,  140 => 28,  118 => 12,  105 => 8,  36 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 50,  152 => 32,  148 => 57,  145 => 56,  141 => 55,  134 => 26,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 50,  54 => 19,  133 => 44,  124 => 41,  111 => 10,  80 => 45,  60 => 20,  52 => 12,  97 => 4,  95 => 21,  88 => 32,  78 => 44,  71 => 37,  72 => 17,  64 => 21,  53 => 23,  42 => 7,  34 => 7,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 36,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 38,  47 => 17,  32 => 8,  40 => 9,  26 => 3,  22 => 3,  25 => 5,  23 => 1,  92 => 53,  86 => 48,  79 => 20,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 37,  63 => 28,  58 => 26,  49 => 18,  43 => 14,  37 => 8,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 28,  77 => 25,  75 => 18,  57 => 27,  50 => 13,  46 => 10,  44 => 11,  39 => 12,  33 => 6,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 9,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 47,  81 => 26,  73 => 21,  70 => 26,  67 => 36,  62 => 33,  59 => 23,  55 => 21,  51 => 18,  48 => 10,  41 => 8,  38 => 8,  35 => 7,  31 => 10,  28 => 7,);
    }
}

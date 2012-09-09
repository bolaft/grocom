<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_7370298bd3010fe57b2d6d8300e01bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 5
            echo "        ";
            $context["icon"] = ('' === $tmp = "            <img width=\"15\" height=\"28\" alt=\"Logs\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAcCAYAAAC+lOV/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQVJREFUeNpi/P//PwO5gImBAjBwmlm8vLyOf/v2zYJYDVxcXCe2bdvmeu7cuS+M9vb2ZIWYoKDgUrKcvWLFipWfP38OYcEmeeDAgQtA6gMQCzg4OBigy0tISHxhYmJiYMFh+EIgBhlgAMXo4DEwffzH5ewLwAA5ADUAG/g7lBMJNkFgCO8fGJsJxTNezUTEM15nE4rnAQ4wkjVraWm9BlK/wc62tLR8fOXKFZmmpqYHhoaGT4Fif/Do/Q7Ep/bt28fz+/dvDkZgKdI4ZcqUmMOHD0t8+vSJi1gXKCgoPGQE5ixTIBuExUjwKsiSpyDNnECGOBCLAjEnkeEA8vMbxqFZ6AMEGADoe2NON2x5yQAAAABJRU5ErkJggg==\"/>
        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
            // line 12
            echo "    ";
        }
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logger.png"), "html", null, true);
        echo "\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 19
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 20
            echo "        <span class=\"count\">
            <span>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 24
        echo "</span>
";
    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        // line 28
        echo "    <h2>Logs</h2>

    ";
        // line 30
        if ($this->getAttribute($this->getContext($context, "collector"), "logs")) {
            // line 31
            echo "        <ul class=\"alt\">
            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "logs"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 33
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                if ((("ERR" == $this->getAttribute($this->getContext($context, "log"), "priorityName")) || ("ERROR" == $this->getAttribute($this->getContext($context, "log"), "priorityName")))) {
                    echo " error";
                }
                echo "\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
                echo "
                    ";
                // line 35
                if (($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "log"), "context"))))) {
                    // line 36
                    echo "                        <br />
                        <small>
                            <strong>Context</strong>: ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "log"), "context")), "html", null, true);
                    echo "
                        </small>
                    ";
                }
                // line 41
                echo "                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 43
            echo "        </ul>
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 45,  150 => 43,  119 => 34,  66 => 19,  68 => 20,  21 => 3,  112 => 45,  106 => 43,  65 => 7,  45 => 8,  136 => 62,  100 => 36,  85 => 28,  76 => 39,  61 => 17,  173 => 54,  170 => 53,  167 => 52,  155 => 33,  149 => 31,  143 => 64,  140 => 28,  118 => 12,  105 => 48,  36 => 6,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 32,  148 => 57,  145 => 56,  141 => 63,  134 => 26,  132 => 60,  127 => 46,  123 => 35,  109 => 44,  93 => 31,  90 => 52,  54 => 19,  133 => 44,  124 => 41,  111 => 33,  80 => 47,  60 => 20,  52 => 10,  97 => 4,  95 => 47,  88 => 32,  78 => 46,  71 => 21,  72 => 17,  64 => 21,  53 => 23,  42 => 7,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 38,  158 => 34,  156 => 60,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 58,  120 => 39,  117 => 44,  103 => 36,  74 => 38,  47 => 11,  32 => 8,  40 => 8,  26 => 3,  22 => 3,  25 => 5,  23 => 1,  92 => 46,  86 => 50,  79 => 20,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 39,  63 => 28,  58 => 16,  49 => 9,  43 => 7,  37 => 5,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 36,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 27,  77 => 24,  75 => 18,  57 => 27,  50 => 12,  46 => 8,  44 => 14,  39 => 12,  33 => 5,  30 => 4,  27 => 6,  135 => 41,  129 => 38,  122 => 46,  116 => 42,  113 => 40,  108 => 49,  104 => 24,  102 => 47,  94 => 32,  89 => 30,  87 => 32,  84 => 49,  81 => 27,  73 => 11,  70 => 10,  67 => 38,  62 => 35,  59 => 23,  55 => 15,  51 => 18,  48 => 9,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}

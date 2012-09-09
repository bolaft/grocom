<?php

/* FrameStyle::js.html.twig */
class __TwigTemplate_9c5670053923931595c27656f61c8f9c extends Twig_Template
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
        if ($this->getContext($context, "js")) {
            // line 2
            echo "<!-- js -->
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "js"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 4
                echo "        <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "file")), "html", null, true);
                echo "\"></script>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 7
        echo "
";
        // line 8
        if ($this->getContext($context, "ieJs")) {
            // line 9
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ieJs"));
            foreach ($context['_seq'] as $context["version"] => $context["file"]) {
                // line 10
                echo "        <!--[if ";
                echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
                echo "]>
            <script type=\"text/javascript\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "file")), "html", null, true);
                echo "\"></script>
        <![endif]-->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "<!-- /js -->
";
        }
    }

    public function getTemplateName()
    {
        return "FrameStyle::js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  51 => 11,  46 => 10,  39 => 8,  36 => 7,  62 => 14,  53 => 11,  48 => 10,  43 => 9,  41 => 9,  38 => 7,  26 => 4,  22 => 3,  19 => 2,  17 => 1,);
    }
}

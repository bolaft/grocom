<?php

/* FrameStyle::less.html.twig */
class __TwigTemplate_a4415bed95d02c39abd595adc189e585 extends Twig_Template
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
        return array (  62 => 14,  53 => 11,  48 => 10,  43 => 9,  41 => 8,  38 => 7,  26 => 4,  22 => 3,  19 => 2,  17 => 1,);
    }
}

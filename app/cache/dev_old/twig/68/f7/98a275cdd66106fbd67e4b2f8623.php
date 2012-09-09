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
        return array (  62 => 14,  53 => 11,  48 => 10,  43 => 9,  41 => 8,  38 => 7,  26 => 4,  22 => 3,  19 => 2,  17 => 1,);
    }
}

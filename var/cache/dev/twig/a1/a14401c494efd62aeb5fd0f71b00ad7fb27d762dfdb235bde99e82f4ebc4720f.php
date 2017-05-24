<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1b1f3437dedfe6ac940b51af49f315b081b0926fa3bf7bdafd41c5f4530fa7d7 extends Twig_Template
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
        $__internal_07cd9b5685ff71cab9932b2faa918ceb3dad2dcb6cb77e4ae0aaee9d6a20f63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cd9b5685ff71cab9932b2faa918ceb3dad2dcb6cb77e4ae0aaee9d6a20f63e->enter($__internal_07cd9b5685ff71cab9932b2faa918ceb3dad2dcb6cb77e4ae0aaee9d6a20f63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_09f0499f8128fd1155563038e9d3746061567e37cd19532c164f9fdfa7686206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f0499f8128fd1155563038e9d3746061567e37cd19532c164f9fdfa7686206->enter($__internal_09f0499f8128fd1155563038e9d3746061567e37cd19532c164f9fdfa7686206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_07cd9b5685ff71cab9932b2faa918ceb3dad2dcb6cb77e4ae0aaee9d6a20f63e->leave($__internal_07cd9b5685ff71cab9932b2faa918ceb3dad2dcb6cb77e4ae0aaee9d6a20f63e_prof);

        
        $__internal_09f0499f8128fd1155563038e9d3746061567e37cd19532c164f9fdfa7686206->leave($__internal_09f0499f8128fd1155563038e9d3746061567e37cd19532c164f9fdfa7686206_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a6607e1cdd29a21df580b0d6c29f1945af393effc735a279413cc7eaee696ff2 extends Twig_Template
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
        $__internal_c161687e22a991b1a19fbf9e58ce39e2f2b9724cee8f805d1beed955b8278e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c161687e22a991b1a19fbf9e58ce39e2f2b9724cee8f805d1beed955b8278e55->enter($__internal_c161687e22a991b1a19fbf9e58ce39e2f2b9724cee8f805d1beed955b8278e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_b9d2e06b48bc1926bf990376bea68aed9d3c6026f5edf89321bd033834232cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d2e06b48bc1926bf990376bea68aed9d3c6026f5edf89321bd033834232cc5->enter($__internal_b9d2e06b48bc1926bf990376bea68aed9d3c6026f5edf89321bd033834232cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_c161687e22a991b1a19fbf9e58ce39e2f2b9724cee8f805d1beed955b8278e55->leave($__internal_c161687e22a991b1a19fbf9e58ce39e2f2b9724cee8f805d1beed955b8278e55_prof);

        
        $__internal_b9d2e06b48bc1926bf990376bea68aed9d3c6026f5edf89321bd033834232cc5->leave($__internal_b9d2e06b48bc1926bf990376bea68aed9d3c6026f5edf89321bd033834232cc5_prof);

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
<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f693788ec7e82f1313b42122b50b8a0d7de0d85ba9a8c5b454761f632864ac7d extends Twig_Template
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
        $__internal_6d738cee36e796ec84d8b374be64ddac14c731028f45bd08c1f2cee44d646b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d738cee36e796ec84d8b374be64ddac14c731028f45bd08c1f2cee44d646b0e->enter($__internal_6d738cee36e796ec84d8b374be64ddac14c731028f45bd08c1f2cee44d646b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6009ecd2a8b6e52c07365f275d9155b8b990f834246ebf48ef463f3fd595840d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6009ecd2a8b6e52c07365f275d9155b8b990f834246ebf48ef463f3fd595840d->enter($__internal_6009ecd2a8b6e52c07365f275d9155b8b990f834246ebf48ef463f3fd595840d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6d738cee36e796ec84d8b374be64ddac14c731028f45bd08c1f2cee44d646b0e->leave($__internal_6d738cee36e796ec84d8b374be64ddac14c731028f45bd08c1f2cee44d646b0e_prof);

        
        $__internal_6009ecd2a8b6e52c07365f275d9155b8b990f834246ebf48ef463f3fd595840d->leave($__internal_6009ecd2a8b6e52c07365f275d9155b8b990f834246ebf48ef463f3fd595840d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

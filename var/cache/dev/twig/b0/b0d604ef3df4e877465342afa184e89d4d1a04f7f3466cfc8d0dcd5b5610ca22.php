<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ca84b3897d022daf053532b4936d58079370216642b732cf7360a491a2470ffe extends Twig_Template
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
        $__internal_c240dc37259f22c470c00db5ffdc267678b95aaf9797f07fce7ae7fa1de2a44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c240dc37259f22c470c00db5ffdc267678b95aaf9797f07fce7ae7fa1de2a44e->enter($__internal_c240dc37259f22c470c00db5ffdc267678b95aaf9797f07fce7ae7fa1de2a44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ba419d1f400c0faa16353ab32800fc7d83aabea369b43ed14036e22890890f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba419d1f400c0faa16353ab32800fc7d83aabea369b43ed14036e22890890f2b->enter($__internal_ba419d1f400c0faa16353ab32800fc7d83aabea369b43ed14036e22890890f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c240dc37259f22c470c00db5ffdc267678b95aaf9797f07fce7ae7fa1de2a44e->leave($__internal_c240dc37259f22c470c00db5ffdc267678b95aaf9797f07fce7ae7fa1de2a44e_prof);

        
        $__internal_ba419d1f400c0faa16353ab32800fc7d83aabea369b43ed14036e22890890f2b->leave($__internal_ba419d1f400c0faa16353ab32800fc7d83aabea369b43ed14036e22890890f2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7c415cac73d65c2251d48544dd636de7349b6a7922240259fe02768ba23819b3 extends Twig_Template
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
        $__internal_ab002101947b2e4f643c45a241dfebeebb87a1ab0fdf51f0c4837a62116255b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab002101947b2e4f643c45a241dfebeebb87a1ab0fdf51f0c4837a62116255b6->enter($__internal_ab002101947b2e4f643c45a241dfebeebb87a1ab0fdf51f0c4837a62116255b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_aea129d6ab1f10def169c0100a147c51acfad16e3b37125b98888dedfd94baa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea129d6ab1f10def169c0100a147c51acfad16e3b37125b98888dedfd94baa0->enter($__internal_aea129d6ab1f10def169c0100a147c51acfad16e3b37125b98888dedfd94baa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_ab002101947b2e4f643c45a241dfebeebb87a1ab0fdf51f0c4837a62116255b6->leave($__internal_ab002101947b2e4f643c45a241dfebeebb87a1ab0fdf51f0c4837a62116255b6_prof);

        
        $__internal_aea129d6ab1f10def169c0100a147c51acfad16e3b37125b98888dedfd94baa0->leave($__internal_aea129d6ab1f10def169c0100a147c51acfad16e3b37125b98888dedfd94baa0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a17a9cf45ab58d5cf5c7cb102f3e40b64084f8b9045064325c325b225417d98d extends Twig_Template
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
        $__internal_086651f2820901c2ca5e567b010d5811e79952d1172c0674001d97d7095990c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086651f2820901c2ca5e567b010d5811e79952d1172c0674001d97d7095990c1->enter($__internal_086651f2820901c2ca5e567b010d5811e79952d1172c0674001d97d7095990c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7647e26c86dc5b76fcb55d46c057455b808c3576ecd452a0af3feea93681c1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7647e26c86dc5b76fcb55d46c057455b808c3576ecd452a0af3feea93681c1c3->enter($__internal_7647e26c86dc5b76fcb55d46c057455b808c3576ecd452a0af3feea93681c1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_086651f2820901c2ca5e567b010d5811e79952d1172c0674001d97d7095990c1->leave($__internal_086651f2820901c2ca5e567b010d5811e79952d1172c0674001d97d7095990c1_prof);

        
        $__internal_7647e26c86dc5b76fcb55d46c057455b808c3576ecd452a0af3feea93681c1c3->leave($__internal_7647e26c86dc5b76fcb55d46c057455b808c3576ecd452a0af3feea93681c1c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

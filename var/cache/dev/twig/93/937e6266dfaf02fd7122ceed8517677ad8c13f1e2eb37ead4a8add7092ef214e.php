<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_76f39323b0263d82465756e8e47bcfa1c3d09e28681a18ee201c4455761b1335 extends Twig_Template
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
        $__internal_576ecf26f3f6105a9386ba18ee869150d50c90467344162c248e79c455dd4fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576ecf26f3f6105a9386ba18ee869150d50c90467344162c248e79c455dd4fa6->enter($__internal_576ecf26f3f6105a9386ba18ee869150d50c90467344162c248e79c455dd4fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2b2863e80a8fe5e3fe1a74414ff685e03910beb72fa84fc370573dc0ba51a5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2863e80a8fe5e3fe1a74414ff685e03910beb72fa84fc370573dc0ba51a5dd->enter($__internal_2b2863e80a8fe5e3fe1a74414ff685e03910beb72fa84fc370573dc0ba51a5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_576ecf26f3f6105a9386ba18ee869150d50c90467344162c248e79c455dd4fa6->leave($__internal_576ecf26f3f6105a9386ba18ee869150d50c90467344162c248e79c455dd4fa6_prof);

        
        $__internal_2b2863e80a8fe5e3fe1a74414ff685e03910beb72fa84fc370573dc0ba51a5dd->leave($__internal_2b2863e80a8fe5e3fe1a74414ff685e03910beb72fa84fc370573dc0ba51a5dd_prof);

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

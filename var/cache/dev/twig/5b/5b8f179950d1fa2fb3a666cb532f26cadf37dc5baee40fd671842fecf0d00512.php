<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_51127bdfd0b07024cdf461245c5688f4dfa899885611c2a9b60443b5b7a4c617 extends Twig_Template
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
        $__internal_822240be7fed6907bf068a78e4d398af095b6d8c4c8232e2809d7728a03d0418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822240be7fed6907bf068a78e4d398af095b6d8c4c8232e2809d7728a03d0418->enter($__internal_822240be7fed6907bf068a78e4d398af095b6d8c4c8232e2809d7728a03d0418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d2a056a85eec0ee55403c825ed370c4d441800f4cfcd5048c312df65aacdec6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a056a85eec0ee55403c825ed370c4d441800f4cfcd5048c312df65aacdec6f->enter($__internal_d2a056a85eec0ee55403c825ed370c4d441800f4cfcd5048c312df65aacdec6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_822240be7fed6907bf068a78e4d398af095b6d8c4c8232e2809d7728a03d0418->leave($__internal_822240be7fed6907bf068a78e4d398af095b6d8c4c8232e2809d7728a03d0418_prof);

        
        $__internal_d2a056a85eec0ee55403c825ed370c4d441800f4cfcd5048c312df65aacdec6f->leave($__internal_d2a056a85eec0ee55403c825ed370c4d441800f4cfcd5048c312df65aacdec6f_prof);

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

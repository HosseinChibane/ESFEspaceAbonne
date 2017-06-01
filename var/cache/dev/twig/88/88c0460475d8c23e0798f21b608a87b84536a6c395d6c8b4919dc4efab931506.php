<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7a4d2980264112ed615220037fa78fed1dbbffcc2bb5857bc4c865761cf449ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4310bc41da0d9d3ba6ccb30d4f2097af38c20999328ec5566d51dc9c7d0b81a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4310bc41da0d9d3ba6ccb30d4f2097af38c20999328ec5566d51dc9c7d0b81a7->enter($__internal_4310bc41da0d9d3ba6ccb30d4f2097af38c20999328ec5566d51dc9c7d0b81a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_faa82d42ff51bae8baa577e3a5fafe95f9161abe46a196cd87702531c4a399cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa82d42ff51bae8baa577e3a5fafe95f9161abe46a196cd87702531c4a399cd->enter($__internal_faa82d42ff51bae8baa577e3a5fafe95f9161abe46a196cd87702531c4a399cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4310bc41da0d9d3ba6ccb30d4f2097af38c20999328ec5566d51dc9c7d0b81a7->leave($__internal_4310bc41da0d9d3ba6ccb30d4f2097af38c20999328ec5566d51dc9c7d0b81a7_prof);

        
        $__internal_faa82d42ff51bae8baa577e3a5fafe95f9161abe46a196cd87702531c4a399cd->leave($__internal_faa82d42ff51bae8baa577e3a5fafe95f9161abe46a196cd87702531c4a399cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d32bd873a41b109a9f50838e42686e62fad5bedcb967766829fa02f9741493dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32bd873a41b109a9f50838e42686e62fad5bedcb967766829fa02f9741493dc->enter($__internal_d32bd873a41b109a9f50838e42686e62fad5bedcb967766829fa02f9741493dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_58e60245a81b86ee37481db97f876b89109f6c9b0498ce0b28a039027441270e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e60245a81b86ee37481db97f876b89109f6c9b0498ce0b28a039027441270e->enter($__internal_58e60245a81b86ee37481db97f876b89109f6c9b0498ce0b28a039027441270e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_58e60245a81b86ee37481db97f876b89109f6c9b0498ce0b28a039027441270e->leave($__internal_58e60245a81b86ee37481db97f876b89109f6c9b0498ce0b28a039027441270e_prof);

        
        $__internal_d32bd873a41b109a9f50838e42686e62fad5bedcb967766829fa02f9741493dc->leave($__internal_d32bd873a41b109a9f50838e42686e62fad5bedcb967766829fa02f9741493dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}

<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_a52505bfd1e150217b801b53d4a97f32d9b2d0e1a1227a4d4faa9655d58b9a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_9c4dacce5637893a63d4626d3c6da50f20f4629b632ff6be39e602bd7864710e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4dacce5637893a63d4626d3c6da50f20f4629b632ff6be39e602bd7864710e->enter($__internal_9c4dacce5637893a63d4626d3c6da50f20f4629b632ff6be39e602bd7864710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_c586662ec631d7945236d5a67c6132c11819cda0a7a979ae26d4150ae2257290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c586662ec631d7945236d5a67c6132c11819cda0a7a979ae26d4150ae2257290->enter($__internal_c586662ec631d7945236d5a67c6132c11819cda0a7a979ae26d4150ae2257290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4dacce5637893a63d4626d3c6da50f20f4629b632ff6be39e602bd7864710e->leave($__internal_9c4dacce5637893a63d4626d3c6da50f20f4629b632ff6be39e602bd7864710e_prof);

        
        $__internal_c586662ec631d7945236d5a67c6132c11819cda0a7a979ae26d4150ae2257290->leave($__internal_c586662ec631d7945236d5a67c6132c11819cda0a7a979ae26d4150ae2257290_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcc59fcdda3ecf42766ccc984b7368416b4cf36c1f36e2f25451a8ab1a69b1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc59fcdda3ecf42766ccc984b7368416b4cf36c1f36e2f25451a8ab1a69b1d0->enter($__internal_fcc59fcdda3ecf42766ccc984b7368416b4cf36c1f36e2f25451a8ab1a69b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f662e905f091b9f05a6f7496336f1abb85eac5de3aaea8f9378694b03cdb588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f662e905f091b9f05a6f7496336f1abb85eac5de3aaea8f9378694b03cdb588->enter($__internal_7f662e905f091b9f05a6f7496336f1abb85eac5de3aaea8f9378694b03cdb588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_7f662e905f091b9f05a6f7496336f1abb85eac5de3aaea8f9378694b03cdb588->leave($__internal_7f662e905f091b9f05a6f7496336f1abb85eac5de3aaea8f9378694b03cdb588_prof);

        
        $__internal_fcc59fcdda3ecf42766ccc984b7368416b4cf36c1f36e2f25451a8ab1a69b1d0->leave($__internal_fcc59fcdda3ecf42766ccc984b7368416b4cf36c1f36e2f25451a8ab1a69b1d0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}

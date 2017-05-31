<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0371bd13a60bd8882bc96a0c40e3ea62a9eb96d8d1a59e3bd9f19257d4614bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_97a6bd008e001af2f10c0155a656a5e126153f8ba9faf3f6552b136cfb8b13e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a6bd008e001af2f10c0155a656a5e126153f8ba9faf3f6552b136cfb8b13e8->enter($__internal_97a6bd008e001af2f10c0155a656a5e126153f8ba9faf3f6552b136cfb8b13e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_d6be3cb1e8ca9c2a70db40b0b127c5e8694a67f1d06575a4f762531eb7081a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6be3cb1e8ca9c2a70db40b0b127c5e8694a67f1d06575a4f762531eb7081a47->enter($__internal_d6be3cb1e8ca9c2a70db40b0b127c5e8694a67f1d06575a4f762531eb7081a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a6bd008e001af2f10c0155a656a5e126153f8ba9faf3f6552b136cfb8b13e8->leave($__internal_97a6bd008e001af2f10c0155a656a5e126153f8ba9faf3f6552b136cfb8b13e8_prof);

        
        $__internal_d6be3cb1e8ca9c2a70db40b0b127c5e8694a67f1d06575a4f762531eb7081a47->leave($__internal_d6be3cb1e8ca9c2a70db40b0b127c5e8694a67f1d06575a4f762531eb7081a47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fe4a56cdf15c1c877ca2b4a0dbd04622e447171fbe1ce20a4ae430db411f415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe4a56cdf15c1c877ca2b4a0dbd04622e447171fbe1ce20a4ae430db411f415->enter($__internal_6fe4a56cdf15c1c877ca2b4a0dbd04622e447171fbe1ce20a4ae430db411f415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3395fad2eee24a7bbab99e4c716e5060ad4f31ccef2c165f1ecaf0e683049d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3395fad2eee24a7bbab99e4c716e5060ad4f31ccef2c165f1ecaf0e683049d90->enter($__internal_3395fad2eee24a7bbab99e4c716e5060ad4f31ccef2c165f1ecaf0e683049d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3395fad2eee24a7bbab99e4c716e5060ad4f31ccef2c165f1ecaf0e683049d90->leave($__internal_3395fad2eee24a7bbab99e4c716e5060ad4f31ccef2c165f1ecaf0e683049d90_prof);

        
        $__internal_6fe4a56cdf15c1c877ca2b4a0dbd04622e447171fbe1ce20a4ae430db411f415->leave($__internal_6fe4a56cdf15c1c877ca2b4a0dbd04622e447171fbe1ce20a4ae430db411f415_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}

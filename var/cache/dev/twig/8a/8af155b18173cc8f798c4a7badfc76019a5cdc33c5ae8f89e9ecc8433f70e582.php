<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_53836646d5f19fb062d069c8fbc19fa6518a47c2966ef82d1615f8d410c85081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_d871cd512da56be4638b8a166d493c576f490cc9cdf7eaf3f382bcbc579b2377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d871cd512da56be4638b8a166d493c576f490cc9cdf7eaf3f382bcbc579b2377->enter($__internal_d871cd512da56be4638b8a166d493c576f490cc9cdf7eaf3f382bcbc579b2377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_bffb3cc7701985b783060f06d3235a2130ea77018d056daf12bf396d80ffc5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffb3cc7701985b783060f06d3235a2130ea77018d056daf12bf396d80ffc5cc->enter($__internal_bffb3cc7701985b783060f06d3235a2130ea77018d056daf12bf396d80ffc5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d871cd512da56be4638b8a166d493c576f490cc9cdf7eaf3f382bcbc579b2377->leave($__internal_d871cd512da56be4638b8a166d493c576f490cc9cdf7eaf3f382bcbc579b2377_prof);

        
        $__internal_bffb3cc7701985b783060f06d3235a2130ea77018d056daf12bf396d80ffc5cc->leave($__internal_bffb3cc7701985b783060f06d3235a2130ea77018d056daf12bf396d80ffc5cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94c1b417941175d399cc4ccd991bc573b92b65862078ab49dc83882394315b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c1b417941175d399cc4ccd991bc573b92b65862078ab49dc83882394315b02->enter($__internal_94c1b417941175d399cc4ccd991bc573b92b65862078ab49dc83882394315b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc72aee85aa5d0857dc0c6a9228f9ee5120a954e4a1ae0e8b29d3434aea28291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc72aee85aa5d0857dc0c6a9228f9ee5120a954e4a1ae0e8b29d3434aea28291->enter($__internal_bc72aee85aa5d0857dc0c6a9228f9ee5120a954e4a1ae0e8b29d3434aea28291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_bc72aee85aa5d0857dc0c6a9228f9ee5120a954e4a1ae0e8b29d3434aea28291->leave($__internal_bc72aee85aa5d0857dc0c6a9228f9ee5120a954e4a1ae0e8b29d3434aea28291_prof);

        
        $__internal_94c1b417941175d399cc4ccd991bc573b92b65862078ab49dc83882394315b02->leave($__internal_94c1b417941175d399cc4ccd991bc573b92b65862078ab49dc83882394315b02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}

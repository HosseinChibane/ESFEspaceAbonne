<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_51738a083eb26f7c16dfbb323cfb748353c6014ff699b06fa8ab433931ed9a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ce8fe0064079f33c715b904f6a37acdc48990e91b5dbccb06c0a0d25bd8b709e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8fe0064079f33c715b904f6a37acdc48990e91b5dbccb06c0a0d25bd8b709e->enter($__internal_ce8fe0064079f33c715b904f6a37acdc48990e91b5dbccb06c0a0d25bd8b709e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_dda5f813959719b2477dc9bbf918189a74afe48eac580662fa764521529a0cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda5f813959719b2477dc9bbf918189a74afe48eac580662fa764521529a0cd5->enter($__internal_dda5f813959719b2477dc9bbf918189a74afe48eac580662fa764521529a0cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8fe0064079f33c715b904f6a37acdc48990e91b5dbccb06c0a0d25bd8b709e->leave($__internal_ce8fe0064079f33c715b904f6a37acdc48990e91b5dbccb06c0a0d25bd8b709e_prof);

        
        $__internal_dda5f813959719b2477dc9bbf918189a74afe48eac580662fa764521529a0cd5->leave($__internal_dda5f813959719b2477dc9bbf918189a74afe48eac580662fa764521529a0cd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2db131aca0d3aa6fc4bc999bc542234c9800ebe4bb53ba3ffee9d41e9fcd4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2db131aca0d3aa6fc4bc999bc542234c9800ebe4bb53ba3ffee9d41e9fcd4fc->enter($__internal_b2db131aca0d3aa6fc4bc999bc542234c9800ebe4bb53ba3ffee9d41e9fcd4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ef8009e2e11949ccd874cfe2c1d9f742e1becd81a032452f20c4db561023c969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8009e2e11949ccd874cfe2c1d9f742e1becd81a032452f20c4db561023c969->enter($__internal_ef8009e2e11949ccd874cfe2c1d9f742e1becd81a032452f20c4db561023c969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ef8009e2e11949ccd874cfe2c1d9f742e1becd81a032452f20c4db561023c969->leave($__internal_ef8009e2e11949ccd874cfe2c1d9f742e1becd81a032452f20c4db561023c969_prof);

        
        $__internal_b2db131aca0d3aa6fc4bc999bc542234c9800ebe4bb53ba3ffee9d41e9fcd4fc->leave($__internal_b2db131aca0d3aa6fc4bc999bc542234c9800ebe4bb53ba3ffee9d41e9fcd4fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

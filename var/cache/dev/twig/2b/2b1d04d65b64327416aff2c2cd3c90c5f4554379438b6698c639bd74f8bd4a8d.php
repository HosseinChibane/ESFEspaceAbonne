<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_07f33d8a7fef8dd925b472c1b7cb757e67e81f3ed40080e23c8f1afb74264aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e9a60dc06040578e52125671ed4edcf127619fd687206ae8b28473cf31b4a1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a60dc06040578e52125671ed4edcf127619fd687206ae8b28473cf31b4a1a4->enter($__internal_e9a60dc06040578e52125671ed4edcf127619fd687206ae8b28473cf31b4a1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_df7f981b457cf3836fa1248ba1f1df6a3fa6ee9ba551d543c3cdbf1c96b4cea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7f981b457cf3836fa1248ba1f1df6a3fa6ee9ba551d543c3cdbf1c96b4cea4->enter($__internal_df7f981b457cf3836fa1248ba1f1df6a3fa6ee9ba551d543c3cdbf1c96b4cea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a60dc06040578e52125671ed4edcf127619fd687206ae8b28473cf31b4a1a4->leave($__internal_e9a60dc06040578e52125671ed4edcf127619fd687206ae8b28473cf31b4a1a4_prof);

        
        $__internal_df7f981b457cf3836fa1248ba1f1df6a3fa6ee9ba551d543c3cdbf1c96b4cea4->leave($__internal_df7f981b457cf3836fa1248ba1f1df6a3fa6ee9ba551d543c3cdbf1c96b4cea4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cc4422526bfaed8939cf771ceac630dd7e45532ee3143e6318738bd4d38b3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc4422526bfaed8939cf771ceac630dd7e45532ee3143e6318738bd4d38b3cc->enter($__internal_2cc4422526bfaed8939cf771ceac630dd7e45532ee3143e6318738bd4d38b3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f27fbbbc939302768c1eee0407d5e7ab7f8ca3eed7523abec6594ec8feb35ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27fbbbc939302768c1eee0407d5e7ab7f8ca3eed7523abec6594ec8feb35ce8->enter($__internal_f27fbbbc939302768c1eee0407d5e7ab7f8ca3eed7523abec6594ec8feb35ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f27fbbbc939302768c1eee0407d5e7ab7f8ca3eed7523abec6594ec8feb35ce8->leave($__internal_f27fbbbc939302768c1eee0407d5e7ab7f8ca3eed7523abec6594ec8feb35ce8_prof);

        
        $__internal_2cc4422526bfaed8939cf771ceac630dd7e45532ee3143e6318738bd4d38b3cc->leave($__internal_2cc4422526bfaed8939cf771ceac630dd7e45532ee3143e6318738bd4d38b3cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}

<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bdb560ca71e435e0b88cfe7a690e5faa5deff9e7e12608602edb4419ea96fc92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_143447af5d17a6b6c0e8d5110adb5d610bab084293ee64891f96a96ad0dfe351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143447af5d17a6b6c0e8d5110adb5d610bab084293ee64891f96a96ad0dfe351->enter($__internal_143447af5d17a6b6c0e8d5110adb5d610bab084293ee64891f96a96ad0dfe351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_2cdcb1fd4686d990306a9f674ae6c70d8e550103a6e19644e8a13e31099bdf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdcb1fd4686d990306a9f674ae6c70d8e550103a6e19644e8a13e31099bdf6b->enter($__internal_2cdcb1fd4686d990306a9f674ae6c70d8e550103a6e19644e8a13e31099bdf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_143447af5d17a6b6c0e8d5110adb5d610bab084293ee64891f96a96ad0dfe351->leave($__internal_143447af5d17a6b6c0e8d5110adb5d610bab084293ee64891f96a96ad0dfe351_prof);

        
        $__internal_2cdcb1fd4686d990306a9f674ae6c70d8e550103a6e19644e8a13e31099bdf6b->leave($__internal_2cdcb1fd4686d990306a9f674ae6c70d8e550103a6e19644e8a13e31099bdf6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6330f98702b75319a62e45db02f530cb15d8c6ecaad6415687a76361bb7ceb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6330f98702b75319a62e45db02f530cb15d8c6ecaad6415687a76361bb7ceb77->enter($__internal_6330f98702b75319a62e45db02f530cb15d8c6ecaad6415687a76361bb7ceb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eee06665faed3a8f15c168117f16d0f721bb25dac870937956dbc1ad53e9389c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee06665faed3a8f15c168117f16d0f721bb25dac870937956dbc1ad53e9389c->enter($__internal_eee06665faed3a8f15c168117f16d0f721bb25dac870937956dbc1ad53e9389c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_eee06665faed3a8f15c168117f16d0f721bb25dac870937956dbc1ad53e9389c->leave($__internal_eee06665faed3a8f15c168117f16d0f721bb25dac870937956dbc1ad53e9389c_prof);

        
        $__internal_6330f98702b75319a62e45db02f530cb15d8c6ecaad6415687a76361bb7ceb77->leave($__internal_6330f98702b75319a62e45db02f530cb15d8c6ecaad6415687a76361bb7ceb77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}

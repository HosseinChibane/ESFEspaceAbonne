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
        $__internal_f811052abb2c063018527eae7cacbef98a3ab40b09540eb438a08e0bfb5aa949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f811052abb2c063018527eae7cacbef98a3ab40b09540eb438a08e0bfb5aa949->enter($__internal_f811052abb2c063018527eae7cacbef98a3ab40b09540eb438a08e0bfb5aa949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8594a1d8ceec5da9e295c72dd1e125119722a3a75959eac55d892234a67f76c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8594a1d8ceec5da9e295c72dd1e125119722a3a75959eac55d892234a67f76c5->enter($__internal_8594a1d8ceec5da9e295c72dd1e125119722a3a75959eac55d892234a67f76c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f811052abb2c063018527eae7cacbef98a3ab40b09540eb438a08e0bfb5aa949->leave($__internal_f811052abb2c063018527eae7cacbef98a3ab40b09540eb438a08e0bfb5aa949_prof);

        
        $__internal_8594a1d8ceec5da9e295c72dd1e125119722a3a75959eac55d892234a67f76c5->leave($__internal_8594a1d8ceec5da9e295c72dd1e125119722a3a75959eac55d892234a67f76c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d5087ea52c860ddfe42b289273e9b568e2112a318af62cee02f32b226006b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5087ea52c860ddfe42b289273e9b568e2112a318af62cee02f32b226006b25->enter($__internal_0d5087ea52c860ddfe42b289273e9b568e2112a318af62cee02f32b226006b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a1dc64ebf86ef4755427444cabfaf702c84ced288bb27b99ba9ce094e019cac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1dc64ebf86ef4755427444cabfaf702c84ced288bb27b99ba9ce094e019cac4->enter($__internal_a1dc64ebf86ef4755427444cabfaf702c84ced288bb27b99ba9ce094e019cac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a1dc64ebf86ef4755427444cabfaf702c84ced288bb27b99ba9ce094e019cac4->leave($__internal_a1dc64ebf86ef4755427444cabfaf702c84ced288bb27b99ba9ce094e019cac4_prof);

        
        $__internal_0d5087ea52c860ddfe42b289273e9b568e2112a318af62cee02f32b226006b25->leave($__internal_0d5087ea52c860ddfe42b289273e9b568e2112a318af62cee02f32b226006b25_prof);

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

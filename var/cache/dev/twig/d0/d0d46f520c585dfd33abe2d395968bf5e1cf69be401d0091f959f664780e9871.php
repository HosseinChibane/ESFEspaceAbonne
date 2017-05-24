<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_bb4286d1274eae1f3b219f6413d5bdb81f4c22aa288b4951fa8654ed3f8a7d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c90b7b002aa56904c3846264ecda86c79cb3f45922372480c7e49923fe0cf39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90b7b002aa56904c3846264ecda86c79cb3f45922372480c7e49923fe0cf39a->enter($__internal_c90b7b002aa56904c3846264ecda86c79cb3f45922372480c7e49923fe0cf39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5438590c199b17cac891a9809bd1e5dc520db5ac51b15e8b4b7b52c1ea4ca6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5438590c199b17cac891a9809bd1e5dc520db5ac51b15e8b4b7b52c1ea4ca6ab->enter($__internal_5438590c199b17cac891a9809bd1e5dc520db5ac51b15e8b4b7b52c1ea4ca6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90b7b002aa56904c3846264ecda86c79cb3f45922372480c7e49923fe0cf39a->leave($__internal_c90b7b002aa56904c3846264ecda86c79cb3f45922372480c7e49923fe0cf39a_prof);

        
        $__internal_5438590c199b17cac891a9809bd1e5dc520db5ac51b15e8b4b7b52c1ea4ca6ab->leave($__internal_5438590c199b17cac891a9809bd1e5dc520db5ac51b15e8b4b7b52c1ea4ca6ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9610f0534dda991767649e163e1d21b6a1a13553c6756356eeef61090a3095ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9610f0534dda991767649e163e1d21b6a1a13553c6756356eeef61090a3095ed->enter($__internal_9610f0534dda991767649e163e1d21b6a1a13553c6756356eeef61090a3095ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d88ddd088546c38a58922b27ebe309dcb321fdcce1a36ad2c9ac63a332830b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d88ddd088546c38a58922b27ebe309dcb321fdcce1a36ad2c9ac63a332830b5->enter($__internal_1d88ddd088546c38a58922b27ebe309dcb321fdcce1a36ad2c9ac63a332830b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1d88ddd088546c38a58922b27ebe309dcb321fdcce1a36ad2c9ac63a332830b5->leave($__internal_1d88ddd088546c38a58922b27ebe309dcb321fdcce1a36ad2c9ac63a332830b5_prof);

        
        $__internal_9610f0534dda991767649e163e1d21b6a1a13553c6756356eeef61090a3095ed->leave($__internal_9610f0534dda991767649e163e1d21b6a1a13553c6756356eeef61090a3095ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}

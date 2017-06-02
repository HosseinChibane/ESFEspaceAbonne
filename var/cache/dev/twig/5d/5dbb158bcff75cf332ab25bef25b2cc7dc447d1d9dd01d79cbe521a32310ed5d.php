<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_9b7f382caf7efa41e29abff6fb8ac657e199abbade0dacd8e2aa4e6bdfd38b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_36003ec34026fc8aca1d986248c42a1d592364983b6ff8f4e5fbd16bed82da99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36003ec34026fc8aca1d986248c42a1d592364983b6ff8f4e5fbd16bed82da99->enter($__internal_36003ec34026fc8aca1d986248c42a1d592364983b6ff8f4e5fbd16bed82da99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_0809458c710119cd0a19ba5c50898944e87c3eb49db1f35d416ace998878dbc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0809458c710119cd0a19ba5c50898944e87c3eb49db1f35d416ace998878dbc1->enter($__internal_0809458c710119cd0a19ba5c50898944e87c3eb49db1f35d416ace998878dbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36003ec34026fc8aca1d986248c42a1d592364983b6ff8f4e5fbd16bed82da99->leave($__internal_36003ec34026fc8aca1d986248c42a1d592364983b6ff8f4e5fbd16bed82da99_prof);

        
        $__internal_0809458c710119cd0a19ba5c50898944e87c3eb49db1f35d416ace998878dbc1->leave($__internal_0809458c710119cd0a19ba5c50898944e87c3eb49db1f35d416ace998878dbc1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_653610057555e3524edb334e6b5e1f952e1269d5eaa98ccc40566d91e8e7efb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653610057555e3524edb334e6b5e1f952e1269d5eaa98ccc40566d91e8e7efb3->enter($__internal_653610057555e3524edb334e6b5e1f952e1269d5eaa98ccc40566d91e8e7efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac3ce606c58b03e9228ce7e451754823967a19771fe4832ea1cac3e16f0701ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3ce606c58b03e9228ce7e451754823967a19771fe4832ea1cac3e16f0701ec->enter($__internal_ac3ce606c58b03e9228ce7e451754823967a19771fe4832ea1cac3e16f0701ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_ac3ce606c58b03e9228ce7e451754823967a19771fe4832ea1cac3e16f0701ec->leave($__internal_ac3ce606c58b03e9228ce7e451754823967a19771fe4832ea1cac3e16f0701ec_prof);

        
        $__internal_653610057555e3524edb334e6b5e1f952e1269d5eaa98ccc40566d91e8e7efb3->leave($__internal_653610057555e3524edb334e6b5e1f952e1269d5eaa98ccc40566d91e8e7efb3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}

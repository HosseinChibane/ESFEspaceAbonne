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
        $__internal_5379d102f0511104b9b4ed779284b13278b903f076f92a11f777111624dd36ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5379d102f0511104b9b4ed779284b13278b903f076f92a11f777111624dd36ca->enter($__internal_5379d102f0511104b9b4ed779284b13278b903f076f92a11f777111624dd36ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_6b2bd123953ab8d7e0776c93e3c0425dabf48cd45776a360966351f7f0ed21bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2bd123953ab8d7e0776c93e3c0425dabf48cd45776a360966351f7f0ed21bb->enter($__internal_6b2bd123953ab8d7e0776c93e3c0425dabf48cd45776a360966351f7f0ed21bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5379d102f0511104b9b4ed779284b13278b903f076f92a11f777111624dd36ca->leave($__internal_5379d102f0511104b9b4ed779284b13278b903f076f92a11f777111624dd36ca_prof);

        
        $__internal_6b2bd123953ab8d7e0776c93e3c0425dabf48cd45776a360966351f7f0ed21bb->leave($__internal_6b2bd123953ab8d7e0776c93e3c0425dabf48cd45776a360966351f7f0ed21bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52482c20157366dd0d31fdbc690feaedc313579b17e08820cdab57a90e3ba262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52482c20157366dd0d31fdbc690feaedc313579b17e08820cdab57a90e3ba262->enter($__internal_52482c20157366dd0d31fdbc690feaedc313579b17e08820cdab57a90e3ba262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67b5dcccda10e93e991cc061fafd5ea54947ee2d769f0b9b04a5a4042bede177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b5dcccda10e93e991cc061fafd5ea54947ee2d769f0b9b04a5a4042bede177->enter($__internal_67b5dcccda10e93e991cc061fafd5ea54947ee2d769f0b9b04a5a4042bede177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_67b5dcccda10e93e991cc061fafd5ea54947ee2d769f0b9b04a5a4042bede177->leave($__internal_67b5dcccda10e93e991cc061fafd5ea54947ee2d769f0b9b04a5a4042bede177_prof);

        
        $__internal_52482c20157366dd0d31fdbc690feaedc313579b17e08820cdab57a90e3ba262->leave($__internal_52482c20157366dd0d31fdbc690feaedc313579b17e08820cdab57a90e3ba262_prof);

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

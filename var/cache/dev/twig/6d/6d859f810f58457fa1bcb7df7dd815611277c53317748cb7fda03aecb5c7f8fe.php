<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7a448448cc83b4869efe12d9db35d8153d498007bdff5de72b40ccd40ddcb708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_45fda9e6ad32293096cf87b75d9568fba65b6635eeb20585e777271fd71ce4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fda9e6ad32293096cf87b75d9568fba65b6635eeb20585e777271fd71ce4a4->enter($__internal_45fda9e6ad32293096cf87b75d9568fba65b6635eeb20585e777271fd71ce4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_4ce1e03b20391582e51883907d7c7b601ab705bfbd24838ac843ed2bd3ee0de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce1e03b20391582e51883907d7c7b601ab705bfbd24838ac843ed2bd3ee0de7->enter($__internal_4ce1e03b20391582e51883907d7c7b601ab705bfbd24838ac843ed2bd3ee0de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45fda9e6ad32293096cf87b75d9568fba65b6635eeb20585e777271fd71ce4a4->leave($__internal_45fda9e6ad32293096cf87b75d9568fba65b6635eeb20585e777271fd71ce4a4_prof);

        
        $__internal_4ce1e03b20391582e51883907d7c7b601ab705bfbd24838ac843ed2bd3ee0de7->leave($__internal_4ce1e03b20391582e51883907d7c7b601ab705bfbd24838ac843ed2bd3ee0de7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6538bc5d0a087b6d43dbb63926d247bab1895bec15907b4045f04f8bb9b9d089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6538bc5d0a087b6d43dbb63926d247bab1895bec15907b4045f04f8bb9b9d089->enter($__internal_6538bc5d0a087b6d43dbb63926d247bab1895bec15907b4045f04f8bb9b9d089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_39ef9ae4e2b0039d184da3f6d542653a8e9117df5659f8652b10dff86a7a9df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ef9ae4e2b0039d184da3f6d542653a8e9117df5659f8652b10dff86a7a9df2->enter($__internal_39ef9ae4e2b0039d184da3f6d542653a8e9117df5659f8652b10dff86a7a9df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_39ef9ae4e2b0039d184da3f6d542653a8e9117df5659f8652b10dff86a7a9df2->leave($__internal_39ef9ae4e2b0039d184da3f6d542653a8e9117df5659f8652b10dff86a7a9df2_prof);

        
        $__internal_6538bc5d0a087b6d43dbb63926d247bab1895bec15907b4045f04f8bb9b9d089->leave($__internal_6538bc5d0a087b6d43dbb63926d247bab1895bec15907b4045f04f8bb9b9d089_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}

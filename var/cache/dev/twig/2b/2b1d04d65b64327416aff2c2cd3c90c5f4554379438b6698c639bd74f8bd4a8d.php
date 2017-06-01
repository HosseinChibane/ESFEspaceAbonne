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
        $__internal_6a4b65ced5ed27c536964aba74027754563d0ad2b4c2635b8f6791be12b4e82a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4b65ced5ed27c536964aba74027754563d0ad2b4c2635b8f6791be12b4e82a->enter($__internal_6a4b65ced5ed27c536964aba74027754563d0ad2b4c2635b8f6791be12b4e82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_92671280a0b4a45cd0b2d821b6a83f5e42682f8f5240ee2ce7f9d66dfa3907be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92671280a0b4a45cd0b2d821b6a83f5e42682f8f5240ee2ce7f9d66dfa3907be->enter($__internal_92671280a0b4a45cd0b2d821b6a83f5e42682f8f5240ee2ce7f9d66dfa3907be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a4b65ced5ed27c536964aba74027754563d0ad2b4c2635b8f6791be12b4e82a->leave($__internal_6a4b65ced5ed27c536964aba74027754563d0ad2b4c2635b8f6791be12b4e82a_prof);

        
        $__internal_92671280a0b4a45cd0b2d821b6a83f5e42682f8f5240ee2ce7f9d66dfa3907be->leave($__internal_92671280a0b4a45cd0b2d821b6a83f5e42682f8f5240ee2ce7f9d66dfa3907be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0f63ba5b51e6c480eeb4b85840e77d4d7a341a299f398efd8d7ad8a9735ef20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f63ba5b51e6c480eeb4b85840e77d4d7a341a299f398efd8d7ad8a9735ef20->enter($__internal_c0f63ba5b51e6c480eeb4b85840e77d4d7a341a299f398efd8d7ad8a9735ef20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e5f39dd120f39299393832a2bf726d9cf75c4d9871ac0269c8aa1156b9b2a714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f39dd120f39299393832a2bf726d9cf75c4d9871ac0269c8aa1156b9b2a714->enter($__internal_e5f39dd120f39299393832a2bf726d9cf75c4d9871ac0269c8aa1156b9b2a714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e5f39dd120f39299393832a2bf726d9cf75c4d9871ac0269c8aa1156b9b2a714->leave($__internal_e5f39dd120f39299393832a2bf726d9cf75c4d9871ac0269c8aa1156b9b2a714_prof);

        
        $__internal_c0f63ba5b51e6c480eeb4b85840e77d4d7a341a299f398efd8d7ad8a9735ef20->leave($__internal_c0f63ba5b51e6c480eeb4b85840e77d4d7a341a299f398efd8d7ad8a9735ef20_prof);

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

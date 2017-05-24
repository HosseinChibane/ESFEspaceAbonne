<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_4f9518a1e64fcae43b273ea7b9e48a701ea07dd0c5f026bd82611f249fecff90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_5b088061a590a20832275ab57477c872cc525464bd12d9025f1f4b92ee592985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b088061a590a20832275ab57477c872cc525464bd12d9025f1f4b92ee592985->enter($__internal_5b088061a590a20832275ab57477c872cc525464bd12d9025f1f4b92ee592985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_b418b8feddb1167971a9fb3da4149fe44f9b221209d4966c083ebcc6e389eaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b418b8feddb1167971a9fb3da4149fe44f9b221209d4966c083ebcc6e389eaeb->enter($__internal_b418b8feddb1167971a9fb3da4149fe44f9b221209d4966c083ebcc6e389eaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b088061a590a20832275ab57477c872cc525464bd12d9025f1f4b92ee592985->leave($__internal_5b088061a590a20832275ab57477c872cc525464bd12d9025f1f4b92ee592985_prof);

        
        $__internal_b418b8feddb1167971a9fb3da4149fe44f9b221209d4966c083ebcc6e389eaeb->leave($__internal_b418b8feddb1167971a9fb3da4149fe44f9b221209d4966c083ebcc6e389eaeb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bde4bd3c80bfde5add4619d9b57777c0bbeecea0d9119037c0f3f494c77bb132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde4bd3c80bfde5add4619d9b57777c0bbeecea0d9119037c0f3f494c77bb132->enter($__internal_bde4bd3c80bfde5add4619d9b57777c0bbeecea0d9119037c0f3f494c77bb132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_52931d20377a63c90269599a150492b5405d4dc668b30153c30bb39d54696769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52931d20377a63c90269599a150492b5405d4dc668b30153c30bb39d54696769->enter($__internal_52931d20377a63c90269599a150492b5405d4dc668b30153c30bb39d54696769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_52931d20377a63c90269599a150492b5405d4dc668b30153c30bb39d54696769->leave($__internal_52931d20377a63c90269599a150492b5405d4dc668b30153c30bb39d54696769_prof);

        
        $__internal_bde4bd3c80bfde5add4619d9b57777c0bbeecea0d9119037c0f3f494c77bb132->leave($__internal_bde4bd3c80bfde5add4619d9b57777c0bbeecea0d9119037c0f3f494c77bb132_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}

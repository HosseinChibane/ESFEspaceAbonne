<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_416fbccd4eddf24fb582e105e94319e664dab29c1539ed248a8f3949d07da149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_8c54165df7d5ba2351d716e55c550f84aa864c9e23660bc171d2474f33fa533e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c54165df7d5ba2351d716e55c550f84aa864c9e23660bc171d2474f33fa533e->enter($__internal_8c54165df7d5ba2351d716e55c550f84aa864c9e23660bc171d2474f33fa533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_aeca4769907858c5d282e16e733ec5bf7909c26da6747da1faa75c2983dee8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeca4769907858c5d282e16e733ec5bf7909c26da6747da1faa75c2983dee8cd->enter($__internal_aeca4769907858c5d282e16e733ec5bf7909c26da6747da1faa75c2983dee8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c54165df7d5ba2351d716e55c550f84aa864c9e23660bc171d2474f33fa533e->leave($__internal_8c54165df7d5ba2351d716e55c550f84aa864c9e23660bc171d2474f33fa533e_prof);

        
        $__internal_aeca4769907858c5d282e16e733ec5bf7909c26da6747da1faa75c2983dee8cd->leave($__internal_aeca4769907858c5d282e16e733ec5bf7909c26da6747da1faa75c2983dee8cd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdeb4e9471c9afae38f42583e3297cafe3168a4b2e376e8ba5de89039514acc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdeb4e9471c9afae38f42583e3297cafe3168a4b2e376e8ba5de89039514acc5->enter($__internal_cdeb4e9471c9afae38f42583e3297cafe3168a4b2e376e8ba5de89039514acc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ec30845e69dc3cd7cf3d7878c8e7de0edec1b5bc8daaffb2e5cd4c60123bee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec30845e69dc3cd7cf3d7878c8e7de0edec1b5bc8daaffb2e5cd4c60123bee0->enter($__internal_6ec30845e69dc3cd7cf3d7878c8e7de0edec1b5bc8daaffb2e5cd4c60123bee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6ec30845e69dc3cd7cf3d7878c8e7de0edec1b5bc8daaffb2e5cd4c60123bee0->leave($__internal_6ec30845e69dc3cd7cf3d7878c8e7de0edec1b5bc8daaffb2e5cd4c60123bee0_prof);

        
        $__internal_cdeb4e9471c9afae38f42583e3297cafe3168a4b2e376e8ba5de89039514acc5->leave($__internal_cdeb4e9471c9afae38f42583e3297cafe3168a4b2e376e8ba5de89039514acc5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}

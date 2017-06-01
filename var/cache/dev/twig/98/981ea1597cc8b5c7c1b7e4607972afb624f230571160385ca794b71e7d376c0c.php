<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_07fd936e6b37bb528bbf9cce186f101a3c454ea4ac6b47b00d7f29bde621bcdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_cc944b8021d4a2cefcf14547631dbebff8f13ab3222730b422944bd2f0f8b384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc944b8021d4a2cefcf14547631dbebff8f13ab3222730b422944bd2f0f8b384->enter($__internal_cc944b8021d4a2cefcf14547631dbebff8f13ab3222730b422944bd2f0f8b384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5f67ba43f6a8c65ccbc67e13997f4b82e1cdf03c1c10732eb007db067016aecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f67ba43f6a8c65ccbc67e13997f4b82e1cdf03c1c10732eb007db067016aecc->enter($__internal_5f67ba43f6a8c65ccbc67e13997f4b82e1cdf03c1c10732eb007db067016aecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc944b8021d4a2cefcf14547631dbebff8f13ab3222730b422944bd2f0f8b384->leave($__internal_cc944b8021d4a2cefcf14547631dbebff8f13ab3222730b422944bd2f0f8b384_prof);

        
        $__internal_5f67ba43f6a8c65ccbc67e13997f4b82e1cdf03c1c10732eb007db067016aecc->leave($__internal_5f67ba43f6a8c65ccbc67e13997f4b82e1cdf03c1c10732eb007db067016aecc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee81b89ef49ac82ba6d3cdae009bd2ba732ef991acfa7a2f3917191580165169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee81b89ef49ac82ba6d3cdae009bd2ba732ef991acfa7a2f3917191580165169->enter($__internal_ee81b89ef49ac82ba6d3cdae009bd2ba732ef991acfa7a2f3917191580165169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91158915c977d768fb4a1f64cd65c93133ebf7bde6feeff43c6ef6c2c441b049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91158915c977d768fb4a1f64cd65c93133ebf7bde6feeff43c6ef6c2c441b049->enter($__internal_91158915c977d768fb4a1f64cd65c93133ebf7bde6feeff43c6ef6c2c441b049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_91158915c977d768fb4a1f64cd65c93133ebf7bde6feeff43c6ef6c2c441b049->leave($__internal_91158915c977d768fb4a1f64cd65c93133ebf7bde6feeff43c6ef6c2c441b049_prof);

        
        $__internal_ee81b89ef49ac82ba6d3cdae009bd2ba732ef991acfa7a2f3917191580165169->leave($__internal_ee81b89ef49ac82ba6d3cdae009bd2ba732ef991acfa7a2f3917191580165169_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}

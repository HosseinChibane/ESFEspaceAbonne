<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_00b18f834011d3fee3ac830b20d384d5183add7c5f1069b5f53a5174a3182eb7 extends Twig_Template
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
        $__internal_ff01749f9dd35417330751b9c245e9d0e671eac8d1997d6f942e1513f0e98b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff01749f9dd35417330751b9c245e9d0e671eac8d1997d6f942e1513f0e98b98->enter($__internal_ff01749f9dd35417330751b9c245e9d0e671eac8d1997d6f942e1513f0e98b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_3f7eb804d9fe9f640111025a127fc7b9fc40c033a29aa7a92d211ad2129db116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7eb804d9fe9f640111025a127fc7b9fc40c033a29aa7a92d211ad2129db116->enter($__internal_3f7eb804d9fe9f640111025a127fc7b9fc40c033a29aa7a92d211ad2129db116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff01749f9dd35417330751b9c245e9d0e671eac8d1997d6f942e1513f0e98b98->leave($__internal_ff01749f9dd35417330751b9c245e9d0e671eac8d1997d6f942e1513f0e98b98_prof);

        
        $__internal_3f7eb804d9fe9f640111025a127fc7b9fc40c033a29aa7a92d211ad2129db116->leave($__internal_3f7eb804d9fe9f640111025a127fc7b9fc40c033a29aa7a92d211ad2129db116_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4f5af75432f540215a3e880a34a4bc112b1c7c6a7fffa74df5751065630f9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f5af75432f540215a3e880a34a4bc112b1c7c6a7fffa74df5751065630f9b7->enter($__internal_f4f5af75432f540215a3e880a34a4bc112b1c7c6a7fffa74df5751065630f9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_572b87ce1d72487a95e9a818f4775d39c7d22ff35965a46e92a198df767e77dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572b87ce1d72487a95e9a818f4775d39c7d22ff35965a46e92a198df767e77dd->enter($__internal_572b87ce1d72487a95e9a818f4775d39c7d22ff35965a46e92a198df767e77dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_572b87ce1d72487a95e9a818f4775d39c7d22ff35965a46e92a198df767e77dd->leave($__internal_572b87ce1d72487a95e9a818f4775d39c7d22ff35965a46e92a198df767e77dd_prof);

        
        $__internal_f4f5af75432f540215a3e880a34a4bc112b1c7c6a7fffa74df5751065630f9b7->leave($__internal_f4f5af75432f540215a3e880a34a4bc112b1c7c6a7fffa74df5751065630f9b7_prof);

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

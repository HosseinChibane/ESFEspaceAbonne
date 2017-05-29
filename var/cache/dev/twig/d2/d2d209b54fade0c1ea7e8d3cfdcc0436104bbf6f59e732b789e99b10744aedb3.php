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
        $__internal_3a3742359d20dbb6635e1ad98056598e883220b9d2405ecd502ba58a70c73aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3742359d20dbb6635e1ad98056598e883220b9d2405ecd502ba58a70c73aa3->enter($__internal_3a3742359d20dbb6635e1ad98056598e883220b9d2405ecd502ba58a70c73aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_b367d1d9ec639656a1daeea7f92328d0462726647db97ae4fd244d0cd449be11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b367d1d9ec639656a1daeea7f92328d0462726647db97ae4fd244d0cd449be11->enter($__internal_b367d1d9ec639656a1daeea7f92328d0462726647db97ae4fd244d0cd449be11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a3742359d20dbb6635e1ad98056598e883220b9d2405ecd502ba58a70c73aa3->leave($__internal_3a3742359d20dbb6635e1ad98056598e883220b9d2405ecd502ba58a70c73aa3_prof);

        
        $__internal_b367d1d9ec639656a1daeea7f92328d0462726647db97ae4fd244d0cd449be11->leave($__internal_b367d1d9ec639656a1daeea7f92328d0462726647db97ae4fd244d0cd449be11_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52e53d84aace174d7beac174d9550b6e52cbc3bd978b2932031cee45ff985ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e53d84aace174d7beac174d9550b6e52cbc3bd978b2932031cee45ff985ae7->enter($__internal_52e53d84aace174d7beac174d9550b6e52cbc3bd978b2932031cee45ff985ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_968d173d94bd906ff0605677d2419fe88310a84d2a4f68667702cc107953366b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968d173d94bd906ff0605677d2419fe88310a84d2a4f68667702cc107953366b->enter($__internal_968d173d94bd906ff0605677d2419fe88310a84d2a4f68667702cc107953366b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_968d173d94bd906ff0605677d2419fe88310a84d2a4f68667702cc107953366b->leave($__internal_968d173d94bd906ff0605677d2419fe88310a84d2a4f68667702cc107953366b_prof);

        
        $__internal_52e53d84aace174d7beac174d9550b6e52cbc3bd978b2932031cee45ff985ae7->leave($__internal_52e53d84aace174d7beac174d9550b6e52cbc3bd978b2932031cee45ff985ae7_prof);

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

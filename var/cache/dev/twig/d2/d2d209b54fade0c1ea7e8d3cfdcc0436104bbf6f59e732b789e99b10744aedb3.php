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
        $__internal_3258933d8fa2d9d75fe5109ec587b7fec99b06a341c67314d8e494398056fbc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3258933d8fa2d9d75fe5109ec587b7fec99b06a341c67314d8e494398056fbc7->enter($__internal_3258933d8fa2d9d75fe5109ec587b7fec99b06a341c67314d8e494398056fbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_219497fcc17efa5e42b7807f4389985c0036c1ed0775afbeaab6ac1d08dc7b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219497fcc17efa5e42b7807f4389985c0036c1ed0775afbeaab6ac1d08dc7b6c->enter($__internal_219497fcc17efa5e42b7807f4389985c0036c1ed0775afbeaab6ac1d08dc7b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3258933d8fa2d9d75fe5109ec587b7fec99b06a341c67314d8e494398056fbc7->leave($__internal_3258933d8fa2d9d75fe5109ec587b7fec99b06a341c67314d8e494398056fbc7_prof);

        
        $__internal_219497fcc17efa5e42b7807f4389985c0036c1ed0775afbeaab6ac1d08dc7b6c->leave($__internal_219497fcc17efa5e42b7807f4389985c0036c1ed0775afbeaab6ac1d08dc7b6c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6b9d299013a45b0eb73ca269a9d195f2ddb6350d467e6638339542c08d5245c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b9d299013a45b0eb73ca269a9d195f2ddb6350d467e6638339542c08d5245c->enter($__internal_c6b9d299013a45b0eb73ca269a9d195f2ddb6350d467e6638339542c08d5245c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2acbd8a0c960bfa6ed79b6e35dc10d1edb74493f3d09ffaad61d8613afd6b467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acbd8a0c960bfa6ed79b6e35dc10d1edb74493f3d09ffaad61d8613afd6b467->enter($__internal_2acbd8a0c960bfa6ed79b6e35dc10d1edb74493f3d09ffaad61d8613afd6b467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2acbd8a0c960bfa6ed79b6e35dc10d1edb74493f3d09ffaad61d8613afd6b467->leave($__internal_2acbd8a0c960bfa6ed79b6e35dc10d1edb74493f3d09ffaad61d8613afd6b467_prof);

        
        $__internal_c6b9d299013a45b0eb73ca269a9d195f2ddb6350d467e6638339542c08d5245c->leave($__internal_c6b9d299013a45b0eb73ca269a9d195f2ddb6350d467e6638339542c08d5245c_prof);

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

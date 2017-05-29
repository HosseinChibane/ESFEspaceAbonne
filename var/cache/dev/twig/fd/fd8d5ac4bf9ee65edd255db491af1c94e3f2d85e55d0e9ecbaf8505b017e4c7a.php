<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4f72b6fedc3bf9f7bffd47ffeb9b76c3c45401380da9c2b0bd93ad0c5462fc68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff9676b3bdb0071e508ac3848f455904cd221b41884f2b6bee1f279b05dcf15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9676b3bdb0071e508ac3848f455904cd221b41884f2b6bee1f279b05dcf15b->enter($__internal_ff9676b3bdb0071e508ac3848f455904cd221b41884f2b6bee1f279b05dcf15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_567b9b0308e2e89b17712cc7645953bf69dc76a82b548cb6adc925cfa2af57fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567b9b0308e2e89b17712cc7645953bf69dc76a82b548cb6adc925cfa2af57fa->enter($__internal_567b9b0308e2e89b17712cc7645953bf69dc76a82b548cb6adc925cfa2af57fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ff9676b3bdb0071e508ac3848f455904cd221b41884f2b6bee1f279b05dcf15b->leave($__internal_ff9676b3bdb0071e508ac3848f455904cd221b41884f2b6bee1f279b05dcf15b_prof);

        
        $__internal_567b9b0308e2e89b17712cc7645953bf69dc76a82b548cb6adc925cfa2af57fa->leave($__internal_567b9b0308e2e89b17712cc7645953bf69dc76a82b548cb6adc925cfa2af57fa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_830e66534b157de1aed27535a767485c52ee1ffecd5cbf9f0b1c065e5d26851c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830e66534b157de1aed27535a767485c52ee1ffecd5cbf9f0b1c065e5d26851c->enter($__internal_830e66534b157de1aed27535a767485c52ee1ffecd5cbf9f0b1c065e5d26851c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_908421002a6cdd9c4ed5b6df5d7bcae26522a49aac5e25f8f07572a7b028271b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908421002a6cdd9c4ed5b6df5d7bcae26522a49aac5e25f8f07572a7b028271b->enter($__internal_908421002a6cdd9c4ed5b6df5d7bcae26522a49aac5e25f8f07572a7b028271b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_908421002a6cdd9c4ed5b6df5d7bcae26522a49aac5e25f8f07572a7b028271b->leave($__internal_908421002a6cdd9c4ed5b6df5d7bcae26522a49aac5e25f8f07572a7b028271b_prof);

        
        $__internal_830e66534b157de1aed27535a767485c52ee1ffecd5cbf9f0b1c065e5d26851c->leave($__internal_830e66534b157de1aed27535a767485c52ee1ffecd5cbf9f0b1c065e5d26851c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2c8cd36f633681ab8ca340f667739b122dc1f7e6fc2010200ee1c56bdbb8e9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8cd36f633681ab8ca340f667739b122dc1f7e6fc2010200ee1c56bdbb8e9fb->enter($__internal_2c8cd36f633681ab8ca340f667739b122dc1f7e6fc2010200ee1c56bdbb8e9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f809f8c1065284ff42e900560ef444e24d121dca392b93f5c4124b72686a501f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f809f8c1065284ff42e900560ef444e24d121dca392b93f5c4124b72686a501f->enter($__internal_f809f8c1065284ff42e900560ef444e24d121dca392b93f5c4124b72686a501f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f809f8c1065284ff42e900560ef444e24d121dca392b93f5c4124b72686a501f->leave($__internal_f809f8c1065284ff42e900560ef444e24d121dca392b93f5c4124b72686a501f_prof);

        
        $__internal_2c8cd36f633681ab8ca340f667739b122dc1f7e6fc2010200ee1c56bdbb8e9fb->leave($__internal_2c8cd36f633681ab8ca340f667739b122dc1f7e6fc2010200ee1c56bdbb8e9fb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d939365d8bebff6ebf242dc131902782c743cc96c0a7f5fcc66b627aaf1a233b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d939365d8bebff6ebf242dc131902782c743cc96c0a7f5fcc66b627aaf1a233b->enter($__internal_d939365d8bebff6ebf242dc131902782c743cc96c0a7f5fcc66b627aaf1a233b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c5df6f9ea48ad648bb4fa67d986a6639c4061331c6b2e6ab32a033ceb178fe94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5df6f9ea48ad648bb4fa67d986a6639c4061331c6b2e6ab32a033ceb178fe94->enter($__internal_c5df6f9ea48ad648bb4fa67d986a6639c4061331c6b2e6ab32a033ceb178fe94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c5df6f9ea48ad648bb4fa67d986a6639c4061331c6b2e6ab32a033ceb178fe94->leave($__internal_c5df6f9ea48ad648bb4fa67d986a6639c4061331c6b2e6ab32a033ceb178fe94_prof);

        
        $__internal_d939365d8bebff6ebf242dc131902782c743cc96c0a7f5fcc66b627aaf1a233b->leave($__internal_d939365d8bebff6ebf242dc131902782c743cc96c0a7f5fcc66b627aaf1a233b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}

<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_5032647d2c31f7992ddca5ac6219669afde5f522b034283d385ee86f67e04047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67afbb547b5efacad109155d71b79f0538ec71c72589b264d5c66bfe99519037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67afbb547b5efacad109155d71b79f0538ec71c72589b264d5c66bfe99519037->enter($__internal_67afbb547b5efacad109155d71b79f0538ec71c72589b264d5c66bfe99519037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_e4e59a03272aac0143dd2d3c9e7d8fe706857c7299cccbe9262c06adf5d2313c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e59a03272aac0143dd2d3c9e7d8fe706857c7299cccbe9262c06adf5d2313c->enter($__internal_e4e59a03272aac0143dd2d3c9e7d8fe706857c7299cccbe9262c06adf5d2313c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_67afbb547b5efacad109155d71b79f0538ec71c72589b264d5c66bfe99519037->leave($__internal_67afbb547b5efacad109155d71b79f0538ec71c72589b264d5c66bfe99519037_prof);

        
        $__internal_e4e59a03272aac0143dd2d3c9e7d8fe706857c7299cccbe9262c06adf5d2313c->leave($__internal_e4e59a03272aac0143dd2d3c9e7d8fe706857c7299cccbe9262c06adf5d2313c_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_492e10b46318466ee24d05185c1e271aa34711d6452824654f79e6251c196c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492e10b46318466ee24d05185c1e271aa34711d6452824654f79e6251c196c00->enter($__internal_492e10b46318466ee24d05185c1e271aa34711d6452824654f79e6251c196c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_508e9faa2fa131fdafafbc381facd8c1ced8eaeac2f3b361bee5c95082335381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508e9faa2fa131fdafafbc381facd8c1ced8eaeac2f3b361bee5c95082335381->enter($__internal_508e9faa2fa131fdafafbc381facd8c1ced8eaeac2f3b361bee5c95082335381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_508e9faa2fa131fdafafbc381facd8c1ced8eaeac2f3b361bee5c95082335381->leave($__internal_508e9faa2fa131fdafafbc381facd8c1ced8eaeac2f3b361bee5c95082335381_prof);

        
        $__internal_492e10b46318466ee24d05185c1e271aa34711d6452824654f79e6251c196c00->leave($__internal_492e10b46318466ee24d05185c1e271aa34711d6452824654f79e6251c196c00_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_8c4b8f9a51a476c93f864e7d59e828eb3c23e61640a5ebae8f549e1b88242fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4b8f9a51a476c93f864e7d59e828eb3c23e61640a5ebae8f549e1b88242fd0->enter($__internal_8c4b8f9a51a476c93f864e7d59e828eb3c23e61640a5ebae8f549e1b88242fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_53e57fa88652fbd913ff8d6bf4fcffc7f46fc67f74a981a45918c99df7313e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e57fa88652fbd913ff8d6bf4fcffc7f46fc67f74a981a45918c99df7313e62->enter($__internal_53e57fa88652fbd913ff8d6bf4fcffc7f46fc67f74a981a45918c99df7313e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_53e57fa88652fbd913ff8d6bf4fcffc7f46fc67f74a981a45918c99df7313e62->leave($__internal_53e57fa88652fbd913ff8d6bf4fcffc7f46fc67f74a981a45918c99df7313e62_prof);

        
        $__internal_8c4b8f9a51a476c93f864e7d59e828eb3c23e61640a5ebae8f549e1b88242fd0->leave($__internal_8c4b8f9a51a476c93f864e7d59e828eb3c23e61640a5ebae8f549e1b88242fd0_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_96b21e66cf8bd6e1f703bd9ee3755a97a1c7206b0e0a5d6e27432f9c858b1a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b21e66cf8bd6e1f703bd9ee3755a97a1c7206b0e0a5d6e27432f9c858b1a79->enter($__internal_96b21e66cf8bd6e1f703bd9ee3755a97a1c7206b0e0a5d6e27432f9c858b1a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_6f373c102d0250999743a8011c63ce324d0eb42436dba65047ac325f3331133a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f373c102d0250999743a8011c63ce324d0eb42436dba65047ac325f3331133a->enter($__internal_6f373c102d0250999743a8011c63ce324d0eb42436dba65047ac325f3331133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6f373c102d0250999743a8011c63ce324d0eb42436dba65047ac325f3331133a->leave($__internal_6f373c102d0250999743a8011c63ce324d0eb42436dba65047ac325f3331133a_prof);

        
        $__internal_96b21e66cf8bd6e1f703bd9ee3755a97a1c7206b0e0a5d6e27432f9c858b1a79->leave($__internal_96b21e66cf8bd6e1f703bd9ee3755a97a1c7206b0e0a5d6e27432f9c858b1a79_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_ce2d9db3836d9dfeca5dd3e720c4bd0015af5efa156cee88696a87819b43145a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2d9db3836d9dfeca5dd3e720c4bd0015af5efa156cee88696a87819b43145a->enter($__internal_ce2d9db3836d9dfeca5dd3e720c4bd0015af5efa156cee88696a87819b43145a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_81e4aae2a3a81081ece10f7db06b2cff71ca22161d7cdba6dd800745aa7958dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e4aae2a3a81081ece10f7db06b2cff71ca22161d7cdba6dd800745aa7958dd->enter($__internal_81e4aae2a3a81081ece10f7db06b2cff71ca22161d7cdba6dd800745aa7958dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_81e4aae2a3a81081ece10f7db06b2cff71ca22161d7cdba6dd800745aa7958dd->leave($__internal_81e4aae2a3a81081ece10f7db06b2cff71ca22161d7cdba6dd800745aa7958dd_prof);

        
        $__internal_ce2d9db3836d9dfeca5dd3e720c4bd0015af5efa156cee88696a87819b43145a->leave($__internal_ce2d9db3836d9dfeca5dd3e720c4bd0015af5efa156cee88696a87819b43145a_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
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
        $__internal_b90affe4502eb4dc30899e7daf07e100699e06b3d25025225a725f16f766260b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90affe4502eb4dc30899e7daf07e100699e06b3d25025225a725f16f766260b->enter($__internal_b90affe4502eb4dc30899e7daf07e100699e06b3d25025225a725f16f766260b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_da19a767261dece66e1017dd311565287de496587faac0f7e50b49b7fc4d7499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da19a767261dece66e1017dd311565287de496587faac0f7e50b49b7fc4d7499->enter($__internal_da19a767261dece66e1017dd311565287de496587faac0f7e50b49b7fc4d7499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_b90affe4502eb4dc30899e7daf07e100699e06b3d25025225a725f16f766260b->leave($__internal_b90affe4502eb4dc30899e7daf07e100699e06b3d25025225a725f16f766260b_prof);

        
        $__internal_da19a767261dece66e1017dd311565287de496587faac0f7e50b49b7fc4d7499->leave($__internal_da19a767261dece66e1017dd311565287de496587faac0f7e50b49b7fc4d7499_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_d9d4e039ee6388c7d4ea62c9b51f556aea2447ab007ab0cbc443ec1547aedae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d4e039ee6388c7d4ea62c9b51f556aea2447ab007ab0cbc443ec1547aedae4->enter($__internal_d9d4e039ee6388c7d4ea62c9b51f556aea2447ab007ab0cbc443ec1547aedae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_10ec37d41b8b7fce937f3343da8d5e0f1c1b81983c226422bed065d9092d8899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ec37d41b8b7fce937f3343da8d5e0f1c1b81983c226422bed065d9092d8899->enter($__internal_10ec37d41b8b7fce937f3343da8d5e0f1c1b81983c226422bed065d9092d8899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_10ec37d41b8b7fce937f3343da8d5e0f1c1b81983c226422bed065d9092d8899->leave($__internal_10ec37d41b8b7fce937f3343da8d5e0f1c1b81983c226422bed065d9092d8899_prof);

        
        $__internal_d9d4e039ee6388c7d4ea62c9b51f556aea2447ab007ab0cbc443ec1547aedae4->leave($__internal_d9d4e039ee6388c7d4ea62c9b51f556aea2447ab007ab0cbc443ec1547aedae4_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_803aab77bc4cb9f0d4e97a110e4e7529e70440f36653feefd94b1cbb43dc659e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803aab77bc4cb9f0d4e97a110e4e7529e70440f36653feefd94b1cbb43dc659e->enter($__internal_803aab77bc4cb9f0d4e97a110e4e7529e70440f36653feefd94b1cbb43dc659e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_fc7f4d437f7e5bc694ee1280f48cf123be1f040ea0a92aa9da249ec23a58a29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7f4d437f7e5bc694ee1280f48cf123be1f040ea0a92aa9da249ec23a58a29d->enter($__internal_fc7f4d437f7e5bc694ee1280f48cf123be1f040ea0a92aa9da249ec23a58a29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_fc7f4d437f7e5bc694ee1280f48cf123be1f040ea0a92aa9da249ec23a58a29d->leave($__internal_fc7f4d437f7e5bc694ee1280f48cf123be1f040ea0a92aa9da249ec23a58a29d_prof);

        
        $__internal_803aab77bc4cb9f0d4e97a110e4e7529e70440f36653feefd94b1cbb43dc659e->leave($__internal_803aab77bc4cb9f0d4e97a110e4e7529e70440f36653feefd94b1cbb43dc659e_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_072e7cee54544bcdc95c4f77a903c586903b05ed61e2faaf81c8401fd355a1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072e7cee54544bcdc95c4f77a903c586903b05ed61e2faaf81c8401fd355a1e4->enter($__internal_072e7cee54544bcdc95c4f77a903c586903b05ed61e2faaf81c8401fd355a1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_2afa2bc2dfbca71113957ffb15113db8634be21fb5eebd001f22c15a2fc0ac3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afa2bc2dfbca71113957ffb15113db8634be21fb5eebd001f22c15a2fc0ac3a->enter($__internal_2afa2bc2dfbca71113957ffb15113db8634be21fb5eebd001f22c15a2fc0ac3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2afa2bc2dfbca71113957ffb15113db8634be21fb5eebd001f22c15a2fc0ac3a->leave($__internal_2afa2bc2dfbca71113957ffb15113db8634be21fb5eebd001f22c15a2fc0ac3a_prof);

        
        $__internal_072e7cee54544bcdc95c4f77a903c586903b05ed61e2faaf81c8401fd355a1e4->leave($__internal_072e7cee54544bcdc95c4f77a903c586903b05ed61e2faaf81c8401fd355a1e4_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_04e01884361e92e00805d25a67b439606c403b897eaf070f7b1ef5241da14b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e01884361e92e00805d25a67b439606c403b897eaf070f7b1ef5241da14b35->enter($__internal_04e01884361e92e00805d25a67b439606c403b897eaf070f7b1ef5241da14b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_45d0647386ff22098fcc2d37f02093507aeb896afed84e6e8393c84ad157f306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d0647386ff22098fcc2d37f02093507aeb896afed84e6e8393c84ad157f306->enter($__internal_45d0647386ff22098fcc2d37f02093507aeb896afed84e6e8393c84ad157f306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_45d0647386ff22098fcc2d37f02093507aeb896afed84e6e8393c84ad157f306->leave($__internal_45d0647386ff22098fcc2d37f02093507aeb896afed84e6e8393c84ad157f306_prof);

        
        $__internal_04e01884361e92e00805d25a67b439606c403b897eaf070f7b1ef5241da14b35->leave($__internal_04e01884361e92e00805d25a67b439606c403b897eaf070f7b1ef5241da14b35_prof);

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

<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_fa3aa0a6710189e8ab9ac899f1e97810338d664b7e9ccb4a81c297ec47ca76fc extends Twig_Template
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
        $__internal_4ad5f29132783c56cb087c9e9b82ac7916370e134a16e0a68eb93822f63b3628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad5f29132783c56cb087c9e9b82ac7916370e134a16e0a68eb93822f63b3628->enter($__internal_4ad5f29132783c56cb087c9e9b82ac7916370e134a16e0a68eb93822f63b3628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_79c6c5daf9671386990350403ad9f71ee71bafa8366f2e593ceb857318925691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c6c5daf9671386990350403ad9f71ee71bafa8366f2e593ceb857318925691->enter($__internal_79c6c5daf9671386990350403ad9f71ee71bafa8366f2e593ceb857318925691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_4ad5f29132783c56cb087c9e9b82ac7916370e134a16e0a68eb93822f63b3628->leave($__internal_4ad5f29132783c56cb087c9e9b82ac7916370e134a16e0a68eb93822f63b3628_prof);

        
        $__internal_79c6c5daf9671386990350403ad9f71ee71bafa8366f2e593ceb857318925691->leave($__internal_79c6c5daf9671386990350403ad9f71ee71bafa8366f2e593ceb857318925691_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_993e41eb067d4f1cffbfcde9d5bae5ceca193d9679f3df44eee2f90f4a8ba436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993e41eb067d4f1cffbfcde9d5bae5ceca193d9679f3df44eee2f90f4a8ba436->enter($__internal_993e41eb067d4f1cffbfcde9d5bae5ceca193d9679f3df44eee2f90f4a8ba436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_86ba39d5c5f3c0501fbeb875dc49e564f982587f0bff7e16b668e65f84d7d224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ba39d5c5f3c0501fbeb875dc49e564f982587f0bff7e16b668e65f84d7d224->enter($__internal_86ba39d5c5f3c0501fbeb875dc49e564f982587f0bff7e16b668e65f84d7d224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_86ba39d5c5f3c0501fbeb875dc49e564f982587f0bff7e16b668e65f84d7d224->leave($__internal_86ba39d5c5f3c0501fbeb875dc49e564f982587f0bff7e16b668e65f84d7d224_prof);

        
        $__internal_993e41eb067d4f1cffbfcde9d5bae5ceca193d9679f3df44eee2f90f4a8ba436->leave($__internal_993e41eb067d4f1cffbfcde9d5bae5ceca193d9679f3df44eee2f90f4a8ba436_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_2f87aedb020eacf6266f8b27333f5b35f7cc377bec268942d7fd8f48979da223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f87aedb020eacf6266f8b27333f5b35f7cc377bec268942d7fd8f48979da223->enter($__internal_2f87aedb020eacf6266f8b27333f5b35f7cc377bec268942d7fd8f48979da223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_e01842162e85548d4f26b12e80be09fbbb020e82b7bc747af3e778e800ebc5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01842162e85548d4f26b12e80be09fbbb020e82b7bc747af3e778e800ebc5a5->enter($__internal_e01842162e85548d4f26b12e80be09fbbb020e82b7bc747af3e778e800ebc5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_e01842162e85548d4f26b12e80be09fbbb020e82b7bc747af3e778e800ebc5a5->leave($__internal_e01842162e85548d4f26b12e80be09fbbb020e82b7bc747af3e778e800ebc5a5_prof);

        
        $__internal_2f87aedb020eacf6266f8b27333f5b35f7cc377bec268942d7fd8f48979da223->leave($__internal_2f87aedb020eacf6266f8b27333f5b35f7cc377bec268942d7fd8f48979da223_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_3b3d27e98c2b9f8c9abe507e77b02cdc208b9af7ac5782307d04484dff3a7ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3d27e98c2b9f8c9abe507e77b02cdc208b9af7ac5782307d04484dff3a7ac6->enter($__internal_3b3d27e98c2b9f8c9abe507e77b02cdc208b9af7ac5782307d04484dff3a7ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_20516209e385e4546a1e3521036c80bf4222aa55e6550ddf8c6d0275fd2e3474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20516209e385e4546a1e3521036c80bf4222aa55e6550ddf8c6d0275fd2e3474->enter($__internal_20516209e385e4546a1e3521036c80bf4222aa55e6550ddf8c6d0275fd2e3474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_20516209e385e4546a1e3521036c80bf4222aa55e6550ddf8c6d0275fd2e3474->leave($__internal_20516209e385e4546a1e3521036c80bf4222aa55e6550ddf8c6d0275fd2e3474_prof);

        
        $__internal_3b3d27e98c2b9f8c9abe507e77b02cdc208b9af7ac5782307d04484dff3a7ac6->leave($__internal_3b3d27e98c2b9f8c9abe507e77b02cdc208b9af7ac5782307d04484dff3a7ac6_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_64af64157add6366bcf193f42f98a58099438bcc833b701feb52dab7062bcf92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64af64157add6366bcf193f42f98a58099438bcc833b701feb52dab7062bcf92->enter($__internal_64af64157add6366bcf193f42f98a58099438bcc833b701feb52dab7062bcf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_bbcfdecc1df373612c6a79583a5147ca4f7bfc7a4f380118da08ea769b49d168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcfdecc1df373612c6a79583a5147ca4f7bfc7a4f380118da08ea769b49d168->enter($__internal_bbcfdecc1df373612c6a79583a5147ca4f7bfc7a4f380118da08ea769b49d168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_bbcfdecc1df373612c6a79583a5147ca4f7bfc7a4f380118da08ea769b49d168->leave($__internal_bbcfdecc1df373612c6a79583a5147ca4f7bfc7a4f380118da08ea769b49d168_prof);

        
        $__internal_64af64157add6366bcf193f42f98a58099438bcc833b701feb52dab7062bcf92->leave($__internal_64af64157add6366bcf193f42f98a58099438bcc833b701feb52dab7062bcf92_prof);

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
